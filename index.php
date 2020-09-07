<?php 

    session_start();
    
    //check if user is already logged in
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = 'You must first log in!';
        header('location:login.php');
    }
    //check if logout button has been clicked;
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:logout.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
    <nav class="navtop">
       <div>
            <h1>My website</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div> 
    </nav>

    <div class="content">
            <h2>Home Page</h2>
            <p>Welcome back, <?=$_SESSION['username']?>!</p>
    </div>
    <!--<div class="content">

        <?php //if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            //echo $_SESSION['success']; 
            //unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php //endif ?>-->

    <!-- logged in user information -->
    <!--<?php  //if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php //echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php //endif ?>-
    </div>-->
</body>
</html>
