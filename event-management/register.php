<?php
// register.php - basic customer registration
require 'config/db.php';
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    // simple check
    if ($name && $email && $password) {
        // check exists
        $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $msg = 'Email already registered';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $ins = $pdo->prepare('INSERT INTO users (name, email, password, role, created_at) VALUES (?, ?, ?, ?, NOW())');
            $ins->execute([$name, $email, $hash, 'customer']);
            $msg = 'Registration successful. You can login now.';
        }
    } else {
        $msg = 'Please fill all fields.';
    }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Register</title></head>
<body>
<h2>Register (Customer)</h2>
<form method="post">
  <label>Name: <input type="text" name="name" required></label><br>
  <label>Email: <input type="email" name="email" required></label><br>
  <label>Password: <input type="password" name="password" required></label><br>
  <button type="submit">Register</button>
</form>
<p><?php echo htmlspecialchars($msg); ?></p>
<p><a href="index.php">Back</a></p>
</body>
</html>
