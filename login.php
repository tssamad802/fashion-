<?php
require_once 'includes/view.php';
$view = new view();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Login</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/mobile.css">
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  background: #f4f6f8;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

.register-container {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  width: 400px;
}

h2 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  width: 100%;
  background: #007bff;
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 10px;
}

button:hover {
  background: #0056b3;
}

.login-link {
  text-align: center;
  margin-top: 15px;
}

.login-link a {
  color: #007bff;
  text-decoration: none;
}

</style>
<body>
  <div class="register-container">
    <h2>Welcome Back</h2>
    <form action="includes/login.inc.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter your email" autocomplete="off" name="email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" autocomplete="off" name="password">
      </div>

      <button type="submit">Login</button>
      <p class="login-link">Don’t have an account? <a href="register.php">Register</a></p>
      <p class="login-link"><a href="#">Forgot Password?</a></p>
    </form>
    <?php
    $view->login_errors()
    ?>
  </div>
</body>
</html>
