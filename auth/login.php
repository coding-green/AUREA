<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    header('Location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container" >
    <h1 class="primary-color">Login</h1>
    <form id="loginForm" action="login_handle.php" method="POST">
      <input type="email" id="loginEmail" name="email" placeholder="Enter your email" required>
      <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required>
      <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
  </div>

  <!-- <script src="script.js"></script> -->
</body>
</html>
