<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    public function showCheckout($id)
    {
        $therapists = User::where('is_staff', 1)->get();
        $service = Service::findOrFail($id);
        // Return the rewards to the view
        return view('customer.checkout', compact('therapists', 'service'));
    }

    public function showUnpaid(Request $request)
    {
        // Assuming the user is logged in and we are retrieving bookings based on the user
        $userId = $request->user()->id;  // Assuming you're using Laravel's built-in authentication

        // Get all bookings for the customer where the payment_status is pending or failed
        $bookings = Booking::where('customer_id', $userId)
            ->whereIn('payment_status', ['pending', 'failed'])
            ->with('service')  // Eager load the related service
            ->get();

        // Pass the bookings to the view
        return view('customer.cart', compact('bookings'));
    }

    public function showPaid(Request $request)
    {
        $userId = $request->user()->id;

        // Get all bookings for the customer where the payment_status is pending or failed
        $bookings = Booking::where('customer_id', $userId)
            ->whereIn('payment_status', ['pending', 'failed'])
            ->with('service')  // Eager load the related service
            ->get();

        // Pass the bookings to the view
        return view('customer.cart', compact('bookings'));
    }

    public function upcomingAppointments(Request $request)
    {
        // Get the current date
        $currentDate = Carbon::now();
        $userId = $request->user()->id;

        // Retrieve bookings with a future booking_date (greater than the current date) and order by booking_date
        $appointments = Booking::where('customer_id', $userId)
            ->where('booking_date', '>', $currentDate)
            ->orderBy('booking_date', 'asc') // Order by nearest date first
            ->with('service') // Eager load the related service for appointment details
            ->with('staff')
            ->paginate(1); // Paginate to show 1 appointment per page

        // Pass the appointments to the view
        return view('customer.upcoming-appointments', compact('appointments'));
    }

    public function previousAppointments(Request $request)
    {
        // Get the current date
        $currentDate = Carbon::now();
        $userId = $request->user()->id;

        // Retrieve bookings with a past booking_date (less than the current date) and order by booking_date in descending order
        $appointments = Booking::where('customer_id', $userId)
            ->where('booking_date', '<', $currentDate) // Past appointments
            ->orderBy('booking_date', 'desc') // Order by the closest past date first
            ->with('service') // Eager load the related service for appointment details
            ->with('staff')  // Eager load the related staff
            ->paginate(1); // Paginate to show 1 appointment per page

        // Pass the appointments to the view
        return view('customer.previous-appointments', compact('appointments'));
    }

    public function staffSchedule(Request $request)
    {
        // Get the current date
        $currentDate = Carbon::now();
        $userId = $request->user()->id;

        // Retrieve all upcoming bookings for the staff member (based on staff_id)
        $appointments = Booking::where('staff_id', $userId)
            ->where('booking_date', '>', $currentDate)
            ->orderBy('booking_date', 'asc') // Order by the booking date ascending
            ->with('service') // Eager load the related service for each booking
            ->with('customer') // Eager load the related customer for each booking (assuming 'customer' relationship exists)
            ->get();

        // Pass the appointments to the view
        return view('staff.schedule', compact('appointments'));
    }

    public function staffHistory(Request $request)
    {
        // Get the current date
        $currentDate = Carbon::now();
        $userId = $request->user()->id;

        // Retrieve all upcoming bookings for the staff member (based on staff_id)
        $appointments = Booking::where('staff_id', $userId)
            ->where('booking_date', '<', $currentDate)
            ->orderBy('booking_date', 'desc') // Order by the booking date ascending
            ->with('service') // Eager load the related service for each booking
            ->with('customer') // Eager load the related customer for each booking (assuming 'customer' relationship exists)
            ->get();

        // Pass the appointments to the view
        return view('staff.history', compact('appointments'));
    }

    public function staffReport()
    {
        $lastMonth = Carbon::now()->subMonth();

        // Fetch data from the database
        $bookingCount = Booking::where('booking_date', '>=', $lastMonth)->count();

        $uniqueCustomers = Booking::where('booking_date', '>=', $lastMonth)
            ->distinct('customer_id')->count();

        $totalProfit = Booking::where('booking_date', '>=', $lastMonth)
            ->join('services', 'bookings.service_id', '=', 'services.id')
            ->sum(\DB::raw('services.price * bookings.duration'));

        $serviceFrequency = Booking::where('booking_date', '>=', $lastMonth)
            ->join('services', 'bookings.service_id', '=', 'services.id')
            ->select('services.service_name', \DB::raw('count(*) as count'))
            ->groupBy('services.service_name')->pluck('count', 'service_name')->toArray();

        $serviceGroupFrequency = Booking::where('booking_date', '>=', $lastMonth)
            ->join('services', 'bookings.service_id', '=', 'services.id')
            ->select('services.service_group', \DB::raw('count(*) as count'))
            ->groupBy('services.service_group')->pluck('count', 'service_group')->toArray();

        $paymentMethodFrequency = Booking::where('booking_date', '>=', $lastMonth)
            ->select('payment_method', \DB::raw('count(*) as count'))
            ->groupBy('payment_method')->pluck('count', 'payment_method')->toArray();

        // Generate charts with QuickChart API
        $serviceChartUrl = $this->generateChart($serviceFrequency);
        $serviceGroupChartUrl = $this->generateChart($serviceGroupFrequency);
        $paymentMethodChartUrl = $this->generateChart($paymentMethodFrequency);

        // Load the PDF view and pass data
        $pdf = PDF::loadView('staff.pdf', [
            'bookingCount' => $bookingCount,
            'uniqueCustomers' => $uniqueCustomers,
            'totalProfit' => $totalProfit,
            'serviceChartUrl' => $serviceChartUrl,
            'serviceGroupChartUrl' => $serviceGroupChartUrl,
            'paymentMethodChartUrl' => $paymentMethodChartUrl
        ]);

        return $pdf->stream('monthly_report.pdf');
    }

    public function generateChart($data)
    {
        $response = Http::get('https://quickchart.io/chart', [
            'c' => json_encode([
                'type' => 'pie',
                'data' => [
                    'labels' => array_keys($data),
                    'datasets' => [
                        ['data' => array_values($data)]
                    ]
                ]
            ])
        ]);

        // Convert the binary image to base64
        return 'data:image/png;base64,' . base64_encode($response->body());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
            'staff_id' => 'required|exists:users,id',
            'booking_date' => 'required|date|after_or_equal:' . Carbon::now()->addDays(5)->toDateString(),
            'duration' => 'required|int',
            'payment_method' => 'required|in:credit_card,paypal,cash,bank_transfer',
        ]);

        Booking::create($request->only([
            'customer_id',
            'service_id',
            'staff_id',
            'booking_date',
            'duration',
            'payment_method',
        ]));

        return redirect()->route('customer.cart')->with('success', 'Booking created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('staff.schedule')->with('success', 'Booking has been deleted successfully.');
    }
}
