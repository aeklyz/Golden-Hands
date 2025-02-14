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
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .faq-section {
            margin-bottom: 20px;
        }
        .faq-section h2 {
            margin-bottom: 10px;
        }
        .faq-item {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 15px;
            margin-bottom: 10px;
        }
        .faq-item h3 {
            margin: 0;
            cursor: pointer;
            padding: 10px;
            background: #f1e3d3;
            border-radius: 5px;
        }
        .faq-item p {
            display: none;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="GoldenHandsImage.jpg" alt="Golden Hands">
        </div>
        <div class="auth-buttons" style="display: flex; align-items: center; gap: 15px;">
            <a href="ServiceCatalogSigned_In.html">Services</a>
            <a href="#">Branches</a>
            <a href="#">Contact Us</a>
            <a href="CustomerAccount.html">My Account</a>
            <a href="ServiceCatalogVisitor.html">Log Out</a>
        </div>
    </div>
    
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        
        <div class="faq-section">
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">What are your operating hours?</h3>
                <p>YAPYAPYAP</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Do I need to make an appointment?</h3>
                <p>YAPYAPYAP</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">What payment methods do you accept?</h3>
                <p>YAPYAPYAP</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Are your therapists certified?</h3>
                <p>YAPYAPYAP</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Do you offer home service massages?</h3>
                <p>YAPYAPYAP</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Additional questions?</h3>
                <p>contact us YAPYAPYAP</p>
            </div>
        </div>
    </div>

    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        }
    </script>
</body>
</html>
