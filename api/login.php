<?php
session_start();
require_once 'conn.php';  

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$code = trim($_POST['code'] ?? '');

if (empty($email) || empty($password) || empty($code)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

// Check user, password, and code
$stmt = $conn->prepare("SELECT id, password, verification_code, code_expiry FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid credentials or code.']);
    exit;
}

$user = $result->fetch_assoc();
if (!password_verify($password, $user['password']) || $user['verification_code'] !== $code || strtotime($user['code_expiry']) < time()) {
    echo json_encode(['success' => false, 'message' => 'Invalid credentials or expired code.']);
    exit;
}

// Clear the code after successful login
$clearStmt = $conn->prepare("UPDATE users SET verification_code = NULL, code_expiry = NULL WHERE id = ?");
$clearStmt->bind_param("i", $user['id']);
$clearStmt->execute();

// Start session and redirect
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_email'] = $email;
echo json_encode(['success' => true, 'message' => 'Login successful.', 'redirect' => 'pages/dashboard.php']);
?>