<?php
    session_start();

    //variables;
    $username = '';
    $email = '';
    $errors = array();

    //connect to database;
    $conn = mysqli_connect('localhost','root','','userdb');
    //register the user;
    if(isset($_POST['user_reg'])){
        //receive all inputs from the form
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email  =mysqli_real_escape_string($conn,$_POST['email']);
        $password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
        $password_2=mysqli_real_escape_string($conn,$_POST['password_2']);

        //simple form validation;
        if(empty($username)){array_push($errors, 'Username is required!');}
        if(empty($email)){array_push($errors, 'Email is required!');}
        if(empty($password_1)){array_push($errors, 'Password is required!');}
        if($password_1 != $password_2){array_push($errors, 'Password mismatch');}
        //we check if a user already exists with the given username;
        $userquery= "SELECT * FROM usertable WHERE username= '$username' OR email = '$email' ";
        $result = mysqli_query($conn,$userquery);
        $user_check_results = mysqli_fetch_assoc($result);

        //logic for if userexits
        if($user_check_results){
            //if user exists
            if($user_check_results['username']===$username){
                array_push($errors, 'User name already exists');
            }
            if($user_check_results['email']===$email){
                array_push($errors, 'Email already exists');
            }
        }
        //if there are no errors,say we count the number of elements in an array,we register the user...
        if(count($errors)==0){
            //we first encrypt the password b4 saving it;
            $password = md5($password_1);
            //then we save the data in a database;
            $register_query = "INSERT INTO usertable(username,email,password) VALUES ('$username','$email','$password')";
            mysqli_query($conn,$register_query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = 'You are now logged in';
            header('location:index.php');
        }
    }

    //login the user
    if(isset($_POST['user_login'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        if(empty($username)){
            array_push($errors, 'Username is required!');
        }
        if(empty($password)){
            array_push($errors, 'Password is required');
        }
        if(count($errors)==0){
            $password =md5($password);
            $login_query= "SELECT * FROM usertable WHERE username='$username' AND password='$password'";
            $results = mysqli_query($conn,$login_query);
            if(mysqli_num_rows($results)==1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = 'You are now logged in';
                header('location:index.php');
            }else{
                array_push($errors,'Invalid username or password');
            }
        }
    }
?>