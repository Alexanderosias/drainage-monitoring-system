document.addEventListener('DOMContentLoaded', function() {
    const sendCodeBtn = document.getElementById('sendCodeBtn');
    const loginForm = document.getElementById('loginForm');
    const statusMsg = document.getElementById('statusMsg');

    let messageTimeout;  // To manage the auto-hide timer

    // Send verification code
    sendCodeBtn.addEventListener('click', function() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (!email || !password) {
            showMessage('Email and password are required.', 'error');
            return;
        }

        // Change button text to indicate sending
        sendCodeBtn.textContent = 'Sending...';
        sendCodeBtn.disabled = true;  // Disable to prevent multiple clicks

        fetch('api/send_code.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showMessage('Verification code sent to your email!', 'success');
            } else {
                showMessage(data.message, 'error');
            }
        })
        .catch(error => showMessage('An error occurred. Please try again.', 'error'))
        .finally(() => {
            // Revert button text and re-enable
            sendCodeBtn.textContent = 'Send Verification Code for 2FA';
            sendCodeBtn.disabled = false;
        });
    });

    // Handle login form submission
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const code = document.getElementById('code').value;

        fetch('api/login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}&code=${encodeURIComponent(code)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = data.redirect;
            } else {
                showMessage(data.message, 'error');
            }
        })
        .catch(error => showMessage('An error occurred. Please try again.', 'error'));
    });

    function showMessage(message, type) {
        // Clear any existing timeout to reset the timer
        if (messageTimeout) {
            clearTimeout(messageTimeout);
        }

        statusMsg.textContent = message;
        statusMsg.className = `status ${type}`;  // Apply success or error class
        statusMsg.style.display = 'block';

        // Auto-hide after 5 seconds for all message types
        messageTimeout = setTimeout(() => {
            statusMsg.style.display = 'none';
        }, 5000);
    }
});