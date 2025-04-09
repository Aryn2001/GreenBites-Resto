<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password - Green Bites</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="process_forgot_password.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Enter your email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <button type="submit" class="btn btn-success">Send Reset Link</button>
        </form>
    </div>
</body>
</html>
