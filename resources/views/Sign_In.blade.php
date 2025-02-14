<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Golden Hands</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to right, #EFD2AA, #D3A46E);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 400px;
            background-color: rgba(0, 0, 0, 0.13);
            padding: 50px 35px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            text-align: center;
        }

        h3 {
            font-size: 32px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: 500;
            margin-top: 20px;
            text-align: left;
        }

        input {
            width: 100%;
            height: 50px;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 13px;
            color: rgb(252, 252, 252);
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            margin-top: 15px;
        }

        .sign-in {
            background-color: #000;
            color: #fff;
        }

        .create-account {
            background-color: #8f8c8cb9;
            color: #fff;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            color: #23a2f6;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Login Here</h3>

        <label for="username">Email</label>
        <input type="text" id="email" placeholder="Email">

        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Password">

        <button class="sign-in">Sign In</button>
        <a href="{{ route('register') }}">
            <button class="create-account">Create New Account</button>
        </a>
        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>
    <script>
        document.querySelector('.sign-in').addEventListener('click', function(event) {
            event.preventDefault();
        
            const username = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Make the request to the Laravel backend (POST request)
            fetch('{{ route("login") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token for security
                },
                body: JSON.stringify({
                    email: email,
                    password: password,
                }),
                credentials: 'same-origin', // Ensure the session cookie is sent along with the request
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Login successful');
                    // Optionally redirect the user after successful login
                    window.location.href = '/profile';  // Redirect to a different page (like the dashboard)
                } else {
                    alert('Login failed');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        });
    </script>

</body>
</html>
