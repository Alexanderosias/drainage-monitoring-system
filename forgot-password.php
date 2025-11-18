<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="logo"><i class="fas fa-water"></i> Drainage Monitoring System</div>
        <h3>Forgot Password</h3>
        <p>Enter your LGU email to receive a verification code.</p>

        <form>
            <input type="email" placeholder="Enter your LGU email" required>
            <button type="button" onclick="alert('Verification code sent to your email!')">
                Send Verification Code
            </button>
        </form>

        <p><a href="index.php">Back to Login</a></p>
    </div>
</body>
</html>
