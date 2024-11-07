<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            min-height: 100vh;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            padding: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            height: 100vh;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

        .header {
            background-color: #2980b9;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 220px;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h3 {
            margin-bottom: 15px;
            color: #2980b9;
        }

        .card p {
            color: #555;
        }

        .footer {
            margin-top: auto;
            text-align: center;
            padding: 10px;
            background-color: #34495e;
            color: white;
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Gym Management</h2>
        <a href="#">Dashboard</a>
        <a href="#">Members</a>
        <a href="#">Workouts</a>
        <a href="#">Classes</a>
        <a href="#">Payments</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>Welcome to the Gym Management Dashboard</h1>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Total Members</h3>
                <p>150</p>
            </div>
            <div class="card">
                <h3>Active Classes</h3>
                <p>12</p>
            </div>
            <div class="card">
                <h3>Total Revenue</h3>
                <p>$12,500</p>
            </div>
            <div class="card">
                <h3>Upcoming Events</h3>
                <p>3</p>
            </div>
        </div>

        <div class="footer">
            &copy; 2024 Gym Management System. All Rights Reserved.
        </div>
    </div>
</body>
</html>
