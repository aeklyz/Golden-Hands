<x-app-layout>
    <div class="container">
        <x-user-sidebar />
        <div class="content">
            <h3>Upcoming Appointment</h3>
            @if ($appointments->count())
                @foreach ($appointments as $appointment)
                    <div class="appointment-card">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" id="upcoming-date" class="date-input"
                                value="{{ \Carbon\Carbon::parse($appointment->booking_date)->toDateString() }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Duration</label>
                            <input type="text" value="{{ $appointment->duration }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Service Name</label>
                            <input type="text" value="{{ $appointment->service->service_name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Therapist Name</label>
                            <input type="text" value="{{ $appointment->staff->name }}" disabled>
                        </div>
                    </div>
                @endforeach

                <!-- Pagination controls -->
                <div class="pagination">
                    {{ $appointments->links() }} <!-- Laravel's built-in pagination links -->
                </div>

            @else
                <p>No upcoming appointments found.</p>
            @endif
        </div>
    </div>

    <script>
        document.querySelectorAll('.date-input').forEach(input => {
            input.addEventListener('change', function () {
                const dateValue = this.value;
                const year = dateValue.split('-')[0];
                if (!/^[0-9]{4}$/.test(year)) {
                    alert('Please enter a valid date.');
                    this.value = '';
                }
            });
        });
    </script>
</x-app-layout>