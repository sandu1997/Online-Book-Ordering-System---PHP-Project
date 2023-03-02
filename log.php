<?php
    session_start();
    $error = '';

    if(isset($_POST['submit'])){
        if(empty($_POST['username']) || empty($_POST['pwd'])){
            $error = "Username or Password invalid";
        } else {
            //define username and password
            $UserName = $_POST['username'];
            $Password = $_POST['pwd'];

            echo $UserName."<br>";
            echo $Password."<br>";

            //mysql connect
            $conn = mysqli_connect("localhost","root","","php_project_db");

            //sql Query
            $query = "SELECT * FROM logintbl where username=? AND password=? LIMIT 1";

            //to protect mysql injection
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss",$UserName,$Password);
            $stmt->execute();
            $stmt->bind_result($UserName,$Password);
            $stmt->store_result();

            if($stmt->fetch()) {
                $_SESSION['submit'] =$UserName;
                header("location: index.php");
            } else {
                $error = "Username or password is invalid";
                include('login.php');
            }
            mysqli_close($conn);
        }

    }
?>