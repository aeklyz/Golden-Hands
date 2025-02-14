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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #D3A46E;
            color: white;
        }
        td {
            cursor: pointer;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("td").forEach(cell => {
                cell.setAttribute("contenteditable", "true");
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Admin</h2>
            <div class="menu-item" style="background: none; color: black;"><a href="Transaction_History.html">Transactions</a></div>
            <div class="menu-item"><a href="schedule.html">Schedule</a></div>
            <div class="menu-item" style="background: none; color: black;"><a href="Monthly_Report.html">Monthly Report</a></div>
        </div>
        <div class="content">
            <div class="header">
                <img src="GoldenHandsImage.jpg" alt="Logo">
                <h1>Schedule</h1>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Service</th>
                        <th>Client</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>mm/dd/yyyy</td>
                        <td>12:00</td>
                        <td>Service 1</td>
                        <td>Kathryn Bernardo</td>
                    </tr>
                    <tr>
                        <td>mm/dd/yyyy</td>
                        <td>12:00</td>
                        <td>Service 4</td>
                        <td>Chesney Kath Daniel Tyrone</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
