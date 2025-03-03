<x-staff-layout>
    <div class="content">
        <h2>Transaction Report</h2>

        <!-- Transaction Table -->
        @if ($appointments->count())
            <table>
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Duration</th>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody id="transaction-table">
                    <tr>
                        <td>{{ $appointment->customer->name ?? 'N/A' }}</td>
                        <td>{{ \Carbon\Carbon::parse($appointment->booking_date)->toDateString() }}
                        </td>
                        <td>{{ $appointment->duration ?? 'N/A' }} hours</td>
                        <td>{{ $appointment->service->service_name ?? 'N/A' }}</td>
                        <td>{{ $appointment->service->price ?? 'N/A' }} php</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p>No upcoming appointments found.</p>
        @endif
    </div>
</x-staff-layout>