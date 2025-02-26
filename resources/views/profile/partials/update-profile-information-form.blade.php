<form id="edit-form" class="hidden" method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')
    <h2>Edit Profile</h2>

    <!-- Username Input -->
    <div class="form-group">
        <label for="name">Username</label>
        <input type="text" id="name" name="name" placeholder="{{ Auth::user()->name }}"
            value="{{ old('name', Auth::user()->name) }}" required>
    </div>

    <!-- Email Input -->
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="{{ Auth::user()->email }}"
            value="{{ old('email', Auth::user()->email) }}" required>

        <!-- Email Verification Logic -->
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div>
                <p>
                    Your email address is unverified.
                    <button type="button" onclick="sendVerificationEmail()" class="resend-verification">
                        Click here to re-send the verification email.
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="status-message">
                        A new verification link has been sent to your email address.
                    </p>
                @endif
            </div>
        @endif
    </div>

    <!-- Buttons -->
    <div class="form-actions">
        <button type="submit">Update</button>
        <button type="button" onclick="toggleEditMode()">Cancel</button>
    </div>
    <script>
        function toggleEditMode() {
            const editForm = document.getElementById('edit-form');
            editForm.classList.toggle('hidden');
        }
    </script>
</form>