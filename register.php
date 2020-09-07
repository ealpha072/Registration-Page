<?php include('server.php');
    //we send our form on the same page for verification
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration System</title>
    <link rel="stylesheet" type="text/css" href="styles/regiter.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <div class="login">
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="register.php" method="post">
        <?php include('errors.php');?>
        <div class="inputs">
            <label>
               <i class="fas fa-user-circle"></i> 
            </label>
            <input placeholder="Username" type="text" name="username" value="<?php echo $username; ?>"><br>
        </div>
        <div class="inputs">
            <label>
                <i class="fa fa-envelope"></i>
            </label>
            <input placeholder="Email address" type="email" name="email" value="<?php echo $email; ?>" ><br>
        </div>
        <div class="inputs">
            <label>
                <i class="fa fa-lock"></i>
            </label>
            <input placeholder="Password" type="password" name="password_1">
        </div>
        <div class="inputs">
            <label>
                <i class="fa fa-lock"></i>
            </label>
            <input placeholder="Confirm Password" type="password" name="password_2"><br>
            <button type="submit" class="btn" name="user_reg">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
    </div>
</body>
</html>
