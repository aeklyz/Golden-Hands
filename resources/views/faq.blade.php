<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Hands</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.icloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Consolidated CSS files -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <!-- Optional inline CSS for FAQ container adjustments -->
    <style>
        .faq-container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
        }

        .faq-container h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .faq-item p {
            display: none;
            /* Initially hide answers */
        }
    </style>
</head>

<body>
    <!-- Navbar Section -->
    @include('layouts.navigation')

    <!-- FAQ Container -->
    <div class="faq-container">
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
                <p>Contact us at [Your Contact Information] for further inquiries.</p>
            </div>
        </div>
    </div>

    <script src="../javascript/FAQ.js"></script>
</body>
@include('layouts.footer')
</html>