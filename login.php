<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system</title>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <div class="login">
        <div>
            <h2>Login</h2>
        </div>
        <form method="post" action="login.php">
            <?php include('errors.php');  ?>
            <div class="inputs">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username">
            </div>
            <div class="inputs">
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password"><br>
            
            
                <button type="submit" class="btn" name="user_login">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>

</body>
</html>
