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
                <p>Golden Hands Spa is a Spa based in the Philippines that has various massages.</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Do I need to make an appointment?</h3>
                <p>Golden Hands Spa operates from 10:00 AM to 10:00 PM, seven days a week, so you can enjoy a relaxing massage at your convenience.</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">What payment methods do you accept?</h3>
                <p>While walk-ins are welcome, we highly recommend making an appointment to ensure availability, especially during peak hours.</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Are your therapists certified?</h3>
                <p>We accept a variety of payment methods, including cash, credit/debit cards (Visa, MasterCard), and mobile payment apps such as GCash and PayMaya.</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Do you offer home service massages?</h3>
                <p>Yes, all of our therapists are fully certified and trained in various massage techniques to ensure the highest level of service and your safety.</p>
            </div>
            <div class="faq-item">
                <h3 onclick="toggleAnswer(this)">Additional questions?</h3>
                <p>Contact us for further inquiries.</p>
            </div>
        </div>
    </div>

    <script src="../javascript/FAQ.js"></script>
</body>
@include('layouts.footer')
</html>