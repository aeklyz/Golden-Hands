<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        .navbar .auth-buttons a {
            padding: 5px 10px;
            border-radius: 5px;
            border: 1px solid black;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .service-detail {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }
        .service-detail img {
            width: 300px;
            height: 300px;
            background: #f0f0f0;
            border-radius: 5px;
        }
        .service-info {
            flex: 1;
        }
        .buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }
        .book-now, .add-to-cart {
            background: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .reviews {
            background: linear-gradient(to right, #c89d5b, #e0ab68);
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .review-list {
            margin-top: 20px;
        }
        .review-card {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="GoldenHandsImage.jpg" alt="Golden Hands">
        </div>
        
        <div class="auth-buttons" style="display: flex; align-items: center; gap: 15px;">
            <a href="ServiceCatalogVisitor.html" style="border: none; padding: 5px 10px;">Home</a>
            <a href="#" style="border: none; padding: 5px 10px;">Branches</a>
            <a href="#" style="border: none; padding: 5px 10px;">Contact Us</a>
            <a href="Sign_In.html">Sign in</a>
            <a href="Register.html">Register</a>
        </div>
    </div>
    
    <div class="container">
        <div class="service-detail">
            <img src="placeholder.png" alt="Service Image">
            <div class="service-info">
                <h1>Service Name</h1>
                <h2>₱500</h2>
                
                <div class="buttons">
                    <button class="book-now" onclick="window.location.href='Sign_In.html'">Book Now</button>
                </div>
                
                <h3>Description</h3>
                <p>A short description of the service.</p>
            </div>
        </div>
        
        <div class="reviews">
            <h2>Latest Reviews</h2>
            <div class="review-list" id="review-list"></div>
        </div>
    </div>
</body>
</html>
