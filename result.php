<?php
    $UserName = $_POST['username'];
    $Password =$_POST['pwd'];

    $UserName = filter_input(INPUT_POST, 'username');
    $Password = filter_input(INPUT_POST, 'pwd');


    if(empty($UserName)){
        $username_error = "Please Insert your username";
    }
    //else{
    //     if(strlen($UserName) < 10){
    //         $username_error = " Your username needs to have a minimum of 6 letters";
    //     }
    // }

    if(empty($Password)){
        $pwd_error = "Please Insert your password";
    }
    // elseif(strlen($Password) < 10){
    //     $pwd_error = " Your password needs to have a minimum length of 6";
    // }

    
    echo empty($username_error);
    echo empty($pwd_error);
    
    if(empty($username_error) && empty($pwd_error)){
        include('log.php');
    }else{
        include('login.php');
        //header("location: login.php");
    }

    //header("location: login.php");


?>

