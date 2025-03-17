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
                    @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->customer->name ?? 'N/A' }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment->booking_date)->toDateString() }}
                                </td>
                                <td>{{ $appointment->duration ?? 'N/A' }} hours</td>
                                <td>{{ $appointment->service->service_name ?? 'N/A' }}</td>
                                <td>{{ $appointment->service->price ?? 'N/A' }} php</td>
                            </tr>
                        </tbody>
                    @endforeach
            </table>
        @else
            <p>No previous and approved appointments</p>
        @endif
    </div>
</x-staff-layout>