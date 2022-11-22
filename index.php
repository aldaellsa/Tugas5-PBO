<?php
session_start();
// jika sudah login, alihkan ke halaman home
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-primary">
    <div class="login-form">
        <form action="proses-login.php" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>