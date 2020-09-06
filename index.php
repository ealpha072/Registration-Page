<?php 
    session_start();
    //check if user is already logged in
    if(isset($_SESSION['username'])){
        $_SESSION['msg'] = 'You must first log in!';
        header('login.php');
    }
    //check if logout button has been clicked;
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div class="header">
        <h2>Home page</h2>
    </div>
    <div class="content">
        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    </div>
</body>
</html>