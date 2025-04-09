<?php
$token = $_GET['token'] ?? '';
if (!$token) {
    die("Invalid or missing token.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <div class="container">
        <h2>Reset Password</h2>
        <form action="process_reset_password.php" method="POST">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
            <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control" name="new_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</body>
</html>
