<x-guest-layout>
    <div class="form-container">
        <x-auth-session-status :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3>Login Here</h3>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">

            <button class="sign-in">Sign In</button>
            @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('register') }}">Create New Account</a>
            @endif
        </form>
    </div>
</x-guest-layout>