<x-app-layout>
    <div class="cart-container">
        <h2>Cart Checkout</h2>

        <div class="cart-item">
            <img src="service1.jpg" alt="Service 1">
            <div class="cart-details">
                <h3>Service 1</h3>
                <p class="cart-price">₱400</p>
            </div>
        </div>

        <div class="cart-item">
            <img src="service2.jpg" alt="Service 2">
            <div class="cart-details">
                <h3>Service 2</h3>
                <p class="cart-price">₱600</p>
            </div>
        </div>

        <div class="cart-item">
            <img src="service3.jpg" alt="Service 3">
            <div class="cart-details">
                <h3>Service 3</h3>
                <p class="cart-price">₱200</p>
            </div>
        </div>
    </div>

    <!-- Fixed Checkout Container -->
    <div class="checkout-container">
        <button class="checkout-btn" onclick="window.location.href='ServiceCatalogSigned_In.html'">Check Out</button>
        <button class="cancel-btn" onclick="window.history.back()">Cancel</button>
    </div>
</x-app-layout>