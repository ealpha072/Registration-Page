<?php include('server.php');
    //we send our form on the same page for verification
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration System</title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="register.php" method="post">
        <?php include('errors.php');?>
        <div class="inputs">
            <label>Username</label><br>
            <input type="text" name="username" value="<?php echo $username; ?>"><br>
        </div>
        <div class="inputs">
            <label>Email</label><br>
            <input type="email" name="email" value="<?php echo $email; ?>"><br>
        </div>
        <div class="inputs">
            <label>Password</label><br>
            <input type="password" name="password_1"><br>
        </div>
        <div class="inputs">
            <label>Confirm Password</label><br>
            <input type="password" name="password_2"><br>
        </div>
        <div class="inputs">
            <button type="submit" class="btn" name="user_reg">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>
</html>