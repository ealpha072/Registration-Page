<?php
    session_start(); 
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = 'You must first log in!';
        header('location:login.php');
    };

    /*if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:logout.php');
    }*/

    $conn = mysqli_connect('localhost','root','','userdb');
    if(!$conn){
        die('Connection to server failed: ' . mysqli_connect_error());
    }
    //using prepare statements;
    $stmt = $conn->prepare("SELECT username,password,email FROM usertable WHERE id=?");
    //bind statement;
    $stmt->bind_param('i',$_SESSION['id']);
    $stmt->execute();
    $stmt->bind_result($username,$password,$email);
    $stmt->fetch();
    $stmt->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profile Page</title>
        <link href="styles/profile.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body class="loggedin">
        <nav class="navtop">
            <div>
                <h1>Website Title</h1>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
        <div class="content">
            <h2>Profile Page</h2>
            <div>
                <p>Your account details are as below:</p>
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><?=$_SESSION['username']?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>