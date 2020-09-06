<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Reistration system</title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="login.php">
        <?php include('errors.php');  ?>
        <div class="inputs">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="inputs">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="inputs">
            <button type="submit" class="btn" name="user_login">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>

</body>
</html>