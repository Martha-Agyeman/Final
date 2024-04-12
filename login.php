<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="userentry.css">

</head>
<body>

<div class="container">
    <div class="right-section">
        <h1 class="title">Sauna: Log In Here</h1>
        <form class ="form-box" id ="loginForm" action="loginaction.php" method="post" onsubmit="return validateLoginForm()">
        <div class = form-group>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <span id="emailError" style="color: black;"></span>
    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span id="passwordError" style="color: black;"></span>
        </div>
        <div class="form-group">
            <button type="submit" name="button" >Log In</button>
        </div>
        </form>
        <div id="errorAlert" style="display: none; color: black;">
            <p>Email or password is invalid. Please try again.</p>
        </div>
        <div class="register-link;">
            Don't have an account? <a href="register.php">Register here</a>
        </div>
    </div>
    
</div>
<script src="login.js"></script>
</body>
</html>
