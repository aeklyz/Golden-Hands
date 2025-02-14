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

        .Register {
            background-color: #000;
            color: #fff;
        }
        .terms-label {
            display: flex;
            align-items: center;
            margin-top: 17px;
            font-size: 14px;
        }

        .terms-label input {
            width: 18px;
            height: 20px;
            margin-right: 8px;
            border-radius: 10%;
            appearance: none;
            border: 2px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: relative;
        }

        .terms-label input:checked::before {
            content: '\2713';
            font-size: 15px;
            font-weight: bold;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Sign Up</h3>

        <label for="username">Username</label>
        <input type="text" id="username" placeholder="username">

        <label for="email">Email</label>
        <input type="text" id="email" placeholder="Email or Phone">
        
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Password">

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" placeholder="Confirm Password">

        
        <label for="terms" class="terms-label">
            <input type="checkbox" id="terms"> Agree to terms and conditions
        </label>
        <button class="Register">Register</button>
    </div>

    <script>
        document.querySelector('.Register').addEventListener('click', function(event) {
            event.preventDefault();

            const name = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;
            const terms = document.getElementById('terms').checked;

            // Check if terms are agreed to
            if (!terms) {
                alert('You must agree to the terms and conditions');
                return;
            }

            // Make a POST request to register the user
            fetch('{{ route(name: "registration") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',  // CSRF protection
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    password: password,
                    password_confirmation: passwordConfirmation, 
                }),
                credentials: 'same-origin', // Send cookies with the request
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Registration successful');
                    window.location.href = '/login'; // Redirect to the login page after registration
                } else {
                    alert('Registration failed: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during registration. Please try again.');
            });
        });
    </script>
</body>
</html>
