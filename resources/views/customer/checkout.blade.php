<x-app-layout>
    <div class="checkout-container">
        <h2>Booking Details</h2>

        <div class="form-group">
            <div class="half-width-small">
                <label>Date</label>
                <input type="date">
            </div>
            <div class="half-width-small">
                <label>Time</label>
                <input type="time">
            </div>
        </div>

        <div class="form-group">
            <div class="half-width">
                <label>Duration</label>
                <select>
                    <option>1 Hour</option>
                    <option>1.5 Hours</option>
                    <option>2 Hours</option>
                </select>
            </div>
            <div class="half-width">
                <label>Branch</label>
                <select>
                    <option>Branch A</option>
                    <option>Branch B</option>
                    <option>Branch C</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="half-width">
                <label>Preferred Therapist</label>
                <select>
                    <option>Any Available</option>
                    <option>Therapist 1</option>
                    <option>Therapist 2</option>
                    <option>Therapist 3</option>
                </select>
            </div>
        </div>

        <h2>Payment Method</h2>
        <div class="form-group">
            <select>
                <option>Cash</option>
                <option>E-cash</option>
                <option>Bank Transfer</option>
            </select>
        </div>

        <div class="payment-details">
            <h3>Payment Detail</h3>
            <p><strong>Service Selected:</strong> Massage Therapy</p>
            <p><strong>Quantity:</strong> 1</p>
            <p><strong>Subtotal:</strong> ₱XX.XX</p>
            <p><strong>Reward Discount:</strong> ₱0.00</p>
            <p><strong>Total Payment:</strong> ₱XX.XX</p>
            <h3>Booking Summary</h3>
            <p><strong>Massage Name:</strong> Massage Therapy</p>
            <p><strong>Selected Date:</strong> <span id="selected-date">-</span></p>
            <p><strong>Selected Time:</strong> <span id="selected-time">-</span></p>
            <p><strong>Duration:</strong> <span id="selected-duration">-</span></p>
            <p><strong>Branch:</strong> <span id="selected-branch">-</span></p>
            <p><strong>Therapist:</strong> <span id="selected-therapist">-</span></p>
        </div>
    </div>

    <div class="fixed-checkout">
        <button class="checkout-btn" onclick="window.location.href='Cart_Checkout.html'">Add to Cart</button>
        <button class="cancel-btn" onclick="window.history.back()">Cancel</button>
    </div>
</x-app-layout>