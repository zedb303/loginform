<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Page</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #1e1e2f;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        /* Floating circles background */
        .floating-circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .floating-circles span {
            position: absolute;
            display: block;
            width: 80px;
            height: 80px;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            animation: float 20s linear infinite;
        }

        /* Animation for floating effect */
        @keyframes float {
            0% { transform: translateY(0) rotate(0); }
            50% { transform: translateY(-50px) rotate(180deg); }
            100% { transform: translateY(0) rotate(360deg); }
        }

        /* Positioning circles */
        .floating-circles span:nth-child(1) { top: 10%; left: 15%; width: 60px; height: 60px; animation-duration: 12s; }
        .floating-circles span:nth-child(2) { top: 40%; left: 25%; animation-duration: 15s; }
        .floating-circles span:nth-child(3) { top: 80%; left: 40%; width: 40px; height: 40px; animation-duration: 10s; }
        .floating-circles span:nth-child(4) { top: 30%; left: 80%; width: 90px; height: 90px; animation-duration: 18s; }
        .floating-circles span:nth-child(5) { top: 70%; left: 60%; width: 50px; height: 50px; animation-duration: 16s; }

        /* Login form styling */
        .login-container {
            width: 300px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            color: white;
            text-align: center;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #ddd;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: none;
            outline: none;
            color: #333;
            background-color: #fff;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <!-- Floating Circles Animation -->
    <div class="floating-circles">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Login Form Container -->
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST", action="getin.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>

</body>
</html>
