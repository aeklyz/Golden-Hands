<x-staff-layout>

    <!-- Content Area -->
    <div class="content">
        <h2>Schedule</h2>

        <!-- Add Data Button -->
        <button class="add-data" onclick="addRow()">+ Add Data</button>

        <!-- Schedule Table -->
        @if ($appointments->count())
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Duration</th>
                        <th>Service</th>
                        <th>Client</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="schedule-table">
                    @foreach($appointments as $appointment)
                        <tr>
                            <!-- Format the date using Carbon to display in a desired format -->
                            <td>{{ \Carbon\Carbon::parse($appointment->booking_date)->toDateString() }}
                            </td>
                            <td>{{ $appointment->duration ?? 'N/A' }} hours</td>
                            <td>{{ $appointment->service->service_name ?? 'N/A' }}</td>
                            <td>{{ $appointment->customer->name ?? 'N/A' }}</td>
                            <td>
                                <form action="{{ route('booking.destroy', $appointment->id) }}" method="post"
                                    onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-btn">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No upcoming appointments found.</p>
        @endif
    </div>
</x-staff-layout>