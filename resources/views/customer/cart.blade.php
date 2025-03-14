<x-app-layout>
    @if ($bookings && $bookings->count())
    <div class="cart-container">
        <h2>Cart Checkout</h2>

        @foreach ($bookings as $booking)
            <div class="cart-item">
                <img src="{{ asset('services/' . $booking->service->image_path) }}"
                    alt="{{ $booking->service->service_name }}">
                <div class="cart-details">
                    <h3>{{ $booking->service->service_name }}</h3>
                    <p class="cart-price">₱{{ number_format($booking->service->price, 2) }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Fixed Checkout Container -->
    <div class="checkout-container">
        <button class="checkout-btn" onclick="window.location.href='ServiceCatalogSigned_In.html'">Check Out</button>
        <button class="cancel-btn" onclick="window.history.back()">Cancel</button>
    </div>
    @else
    <div class="cart-container">
        <h2>No Checkouts</h2>
    </div>
    @endif
</x-app-layout>