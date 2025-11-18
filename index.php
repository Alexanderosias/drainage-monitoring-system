<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drainage System - Login</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="logo"><i class="fas fa-water"></i> Drainage Monitoring System</div>
        <form id="loginForm">
            <input type="email" id="email" placeholder="Enter your LGU email" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="button" id="sendCodeBtn">Send Verification Code for 2FA</button>
            <input type="text" id="code" placeholder="Enter Verification Code" style="margin-top: 10px;" required>
            <button type="submit">Login</button>
        </form>
        <p><a href="forgot-password.php">Forgot Password?</a></p>
        <div class="status" id="statusMsg" style="display: none;"></div>
    </div>
    <script src="script/login.js"></script>
</body>
</html>