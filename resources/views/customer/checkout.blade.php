<x-app-layout>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="checkout-container">
            <h2>Booking Details</h2>

            <!-- Hidden field for customer_id (user_id) -->
            <input type="hidden" name="customer_id" value="{{ auth()->user()->id }}">

            <!-- Hidden field for service_id -->
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <!-- Date Picker -->
            <div class="form-group">
                <div class="half-width-small">
                    <label for="booking-date">Date</label>
                    <input type="date" id="booking-date" name="booking_date" required>
                </div>
            </div>

            <!-- Therapist and Duration -->
            <div class="form-group">
                <div class="half-width">
                    <label for="therapist">Preferred Therapist</label>
                    <select id="therapist" name="staff_id" required>
                        @foreach($therapists as $therapist)
                            <option value="{{ $therapist->id }}">{{ $therapist->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="half-width">
                    <label for="duration">Duration</label>
                    <select id="duration" name="duration" required>
                        <option value="1">1 Hour</option>
                        <option value="2">2 Hours</option>
                    </select>
                </div>
            </div>

            <!-- Payment Method -->
            <h2>Payment Method</h2>
            <div class="form-group">
                <select id="payment_method" name="payment_method" required>
                    <option value="cash">Cash</option>
                    <option value="paypal">Paypal</option>
                </select>
            </div>

            <!-- Payment Details (Service Summary) -->
            <div class="payment-details">
                <h3>Payment Detail</h3>
                <p><strong>Service Selected:</strong> {{ $service->service_name }}</p>
                <p><strong>Quantity:</strong> 1</p>
                <p><strong>Subtotal:</strong> ₱XX.XX</p>
                <p><strong>Total Payment:</strong> ₱XX.XX</p>

                <h3>Booking Summary</h3>
                <p><strong>Massage Name:</strong> Massage Therapy</p>
                <p><strong>Selected Date:</strong> <span id="selected-date">-</span></p>
                <p><strong>Duration:</strong> <span id="selected-duration">-</span></p>
                <p><strong>Therapist:</strong> <span id="selected-therapist">-</span></p>
            </div>
        </div>

        <div class="fixed-checkout">
            <button type="submit" class="checkout-btn">Add to Cart</button>
            <button type="button" class="cancel-btn" onclick="window.history.back()">Cancel</button>
        </div>
    </form>

    <script>
        // Update the booking summary dynamically as the user selects options
        document.getElementById('booking-date').addEventListener('change', function () {
            document.getElementById('selected-date').textContent = this.value;
        });

        document.getElementById('duration').addEventListener('change', function () {
            document.getElementById('selected-duration').textContent = this.options[this.selectedIndex].text;
        });

        document.getElementById('therapist').addEventListener('change', function () {
            const selectedTherapist = this.options[this.selectedIndex].text;
            document.getElementById('selected-therapist').textContent = selectedTherapist;
        });
        // Get the current date and add 5 days
        const today = new Date();
        const minDate = new Date(today);
        minDate.setDate(today.getDate() + 5);

        // Format the date to YYYY-MM-DD format
        const minDateString = minDate.toISOString().split('T')[0];

        // Set the 'min' attribute of the date input to the formatted date
        document.getElementById("booking-date").setAttribute("min", minDateString);
    </script>
</x-app-layout>