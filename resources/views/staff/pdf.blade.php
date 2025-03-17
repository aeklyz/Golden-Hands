<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Monthly Booking Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        img {
            width: 600px;
            height: 350px;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <h1>Monthly Booking Report</h1>

    <p><strong>Total Bookings:</strong> {{ $bookingCount }}</p>
    <p><strong>Unique Customers:</strong> {{ $uniqueCustomers }}</p>
    <p><strong>Total Profit:</strong> {{ number_format($totalProfit, 2) }} PHP</p>

    <h3>Service Frequency</h3>
    <img src="{{ $serviceChartUrl }}" alt="Service Chart">

    <h3>Service Group Frequency</h3>
    <img src="{{ $serviceGroupChartUrl }}" alt="Service Group Chart">

    <h3>Preferred Payment Method</h3>
    <img src="{{ $paymentMethodChartUrl }}" alt="Payment Method Chart">
</body>

</html>