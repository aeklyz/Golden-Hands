<button onclick="deleteAccount()">Delete Account</button>

<script>
    function deleteAccount() {
        const userConfirmed = confirm('Are you sure you want to delete your account?');

        if (userConfirmed) {
            // Prompt the user for their password
            const password = prompt('Please enter your password to confirm deletion:');
            
            if (password) {
                // Make an HTTP request to delete the account (you might want to use AJAX or submit the form)
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("profile.destroy") }}'; // Ensure this route is correct
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                // Add the CSRF token
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = csrfToken;
                form.appendChild(csrfInput);

                // Add the password input
                const passwordInput = document.createElement('input');
                passwordInput.type = 'hidden';
                passwordInput.name = 'password';
                passwordInput.value = password;
                form.appendChild(passwordInput);

                // Add the method override for DELETE
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Submit the form
                document.body.appendChild(form);
                form.submit();
            } else {
                alert('Password is required to confirm deletion.');
            }
        }
    }
</script>