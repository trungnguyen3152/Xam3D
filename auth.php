<?php
session_start();
header('Content-Type: application/json');
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Phương thức không được hỗ trợ']);
    exit;
}

$action = $_POST['action'] ?? '';

if ($action === 'login') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Vui lòng nhập đầy đủ thông tin']);
        exit;
    }
    
    if (!preg_match('/^[a-zA-Z0-9]{1,15}$/', $username) || !preg_match('/^[a-zA-Z0-9]{1,15}$/', $password)) {
        echo json_encode(['status' => 'error', 'message' => 'Tên đăng nhập hoặc mật khẩu không hợp lệ (tối đa 15 ký tự, không chứa ký tự đặc biệt)']);
        exit;
    }
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        echo json_encode(['status' => 'success', 'message' => 'Đăng nhập thành công']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Tên đăng nhập hoặc mật khẩu không đúng']);
    }
    
} elseif ($action === 'register') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo json_encode(['status' => 'error', 'message' => 'Vui lòng điền đầy đủ thông tin']);
        exit;
    }
    
    if (!preg_match('/^[a-zA-Z0-9]{1,15}$/', $username)) {
        echo json_encode(['status' => 'error', 'message' => 'Tên đăng nhập tối đa 15 ký tự, chỉ gồm chữ và số']);
        exit;
    }
    
    if (!preg_match('/^[a-zA-Z0-9]{1,15}$/', $password)) {
        echo json_encode(['status' => 'error', 'message' => 'Mật khẩu tối đa 15 ký tự, chỉ gồm chữ và số']);
        exit;
    }
    
    if ($password !== $confirm_password) {
        echo json_encode(['status' => 'error', 'message' => 'Mật khẩu xác nhận không khớp']);
        exit;
    }
    
    // Check if username already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->fetch()) {
        echo json_encode(['status' => 'error', 'message' => 'Tên đăng nhập này đã tồn tại, vui lòng chọn tên khác']);
        exit;
    }
    
    // Check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['status' => 'error', 'message' => 'Email này đã được đăng ký']);
        exit;
    }
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    
    if ($stmt->execute([$username, $email, $hash])) {
        // Optional: auto-login after register
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['username'] = $username;
        echo json_encode(['status' => 'success', 'message' => 'Đăng ký thành công']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Đã có lỗi xảy ra, vui lòng thử lại']);
    }
} elseif ($action === 'logout') {
    session_destroy();
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Hành động không hợp lệ']);
}
?>
