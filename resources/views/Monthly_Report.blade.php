<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Hands</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #EFD2AA, #D3A46E);
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: #F8F8F8;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar h2 {
            margin-bottom: 20px;
        }
        .menu-item {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .menu-item a {
            color: rgb(34, 32, 32);
            text-decoration: none;
            display: block;
        }
        .menu-item a:hover {
            text-decoration: underline;
        }
        .menu-item:nth-child(3) {
            background: #D3A46E;
            color: white;
        }
        .menu-item:nth-child(2) {
            background: none;
            color: black;
        }
        .content {
            flex: 1;
            padding: 20px;
            background: white;
            border-radius: 10px;
            margin: 20px;
        }
        .header {
            display: flex;
            align-items: center;
            background: linear-gradient(to right, #C89D5B, #E0AB68);
            padding: 15px;
            border-radius: 8px;
            color: black;
        }
        .header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .chart-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        canvas {
            max-width: 300px;
            max-height: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Admin</h2>
            <div class="menu-item"><a href="Transaction_History.html">Transactions</a></div>
            <div class="menu-item" style="background: none; color: black;"><a href="Schedule.html">Schedule</a></div>
            <div class="menu-item" style="background: #D3A46E; color: white;"><a href="Monthly_Report.html">Monthly Report</a></div>
        </div>
        <div class="content" id="report">
            <div class="header">
                <img src="GoldenHandsImage.jpg" alt="Logo">
                <h1>Monthly Report</h1>
            </div>
            <div class="chart-container">
                <canvas id="clientsChart"></canvas>
                <canvas id="servicesChart"></canvas>
                <canvas id="grossIncomeChart"></canvas>
                <canvas id="incomeChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        function showReport() {
            document.getElementById("report").scrollIntoView({ behavior: "smooth" });
        }
        
        function generateChart(id, labels, data) {
            new Chart(document.getElementById(id), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50']
                    }]
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            generateChart("clientsChart", ["New", "Returning"], [60, 40]);
            generateChart("servicesChart", ["Massage", "Facial", "Other"], [50, 30, 20]);
            generateChart("grossIncomeChart", ["Total Income"], [5000]);
            generateChart("incomeChart", ["Service Revenue", "Tips"], [4500, 500]);
        });
    </script>
</body>
</html>
