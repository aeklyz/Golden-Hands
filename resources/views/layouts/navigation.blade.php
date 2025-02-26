<div class="navbar">
    <div class="logo">
        <img src="{{ asset("GoldenHandsImage.jpg") }}" alt="Golden Hands">
    </div>
    <div class="auth-buttons">
        <a href="{{ route('customer.catalog') }}">Home</a>
        <a href="https://maps.app.goo.gl/jGxoTThChTDqqfUv5">Branches</a>
        <a href="https://www.facebook.com/profile.php?id=100089940026477">Contact Us</a>
        <a href="{{ route('customer.cart') }}" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
        @if(Auth::check())
            <!-- Show My Account and Log Out for logged-in users -->
            <a href="{{ route('profile.edit') }}">My Account</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        @else
            <!-- Show Login and Register buttons for guests -->
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endif
    </div>
</div>