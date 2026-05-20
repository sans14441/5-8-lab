<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>Вхід в систему</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container loginPage" style="max-width: 400px; margin: 100px auto; padding: 20px; box-shadow: 0 0 10px #ccc; border-radius: 8px;">
    <h2>Please sign in</h2>
    <form class="signIn-form">
        <div style="margin-bottom: 15px;">
            <input type="text" id="login_user" placeholder="Login" required style="width: 100%; padding: 10px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <input type="password" id="password_user" placeholder="Password" required style="width: 100%; padding: 10px; box-sizing: border-box;">
        </div>
        <button class="loginBtn" type="submit" style="width: 100%; padding: 10px; background: #A53DFF; color: white; border: none; border-radius: 4px; cursor: pointer;">Sign In</button>
        <p class="error-message" style="color: red; margin-top: 10px;"></p>
    </form>
</div>
<script src="assets/js/login.js"></script>
</body>
</html>