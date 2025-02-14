<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Hands</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #d4d4d4;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #c89d5b, #e0ab68);
            padding: 10px 20px;
        }
        .navbar img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .navbar a {
            color: black;
            text-decoration: none;
            margin: 0 10px;
        }
        .navbar .logout {
            background: black;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .container {
            display: flex;
            width: 80%;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        .sidebar {
            background: #e0e0e0;
            padding: 20px;
            width: 250px;
            text-align: center;
        }
        .sidebar img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .sidebar a {
            display: block;
            text-decoration: none;
            color: black;
            margin: 10px 0;
        }
        .content {
            flex: 1;
            padding: 30px;
        }
        .content h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .update-btn {
            background: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div>
            <img src="GoldenHandsImage.jpg" alt="Golden Hands">
           
        </div>
        <div>
            <a href="#">Services</a>
            <a href="#">Branches</a>
            <a href="#">Contact Us</a>
            <a href="#">My Account</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf <!-- CSRF protection token -->
                <button type="submit" class="logout">Log Out</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <img src="user-profile.jpg" alt="Profile">
            <h3>First Last Name</h3>
            <a href="#">Edit Profile</a>
            <a href="#">Appointments</a>
            <a href="#">Rewards</a>
        </div>
        <div class="content">
            <h2>Edit Profile</h2>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" placeholder="Value">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" placeholder="Value">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="123">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" placeholder="123">
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="date">
            </div>
            <button class="update-btn">Update</button>
        </div>
    </div>
</body>
</html>
