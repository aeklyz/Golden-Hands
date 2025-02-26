<x-guest-layout>
    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h3>Sign Up</h3>

            <label for="name">Username</label>
            <input type="text" id="name" name="name" placeholder="username">
            <x-input-error :messages="$errors->get('name')" />

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <x-input-error :messages="$errors->get('email')" />
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">
            <x-input-error :messages="$errors->get('password')" />

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
            <x-input-error :messages="$errors->get('password_confirmation')" />

            
            <label for="terms" class="terms-label">
                <input type="checkbox" id="terms"> Agree to terms and conditions
            </label>
            <button class="register-btn">Register</button>
            <a href="{{ route('login') }}">
                {{ 'Already registered?' }}
            </a>
        </form>
    </div>
</x-guest-layout>
