<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <h1 class="primary-color">Sign Up</h1>
    <form id="signupForm">
      <input type="text" id="signupName" placeholder="Enter your name" required>
      <input type="email" id="signupEmail" placeholder="Enter your email" required>
      <input type="password" id="signupPassword" placeholder="Create a password" required>
      <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>

  <script src="script.js"></script>
</body>
</html>
