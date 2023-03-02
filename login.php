<?php
    include_once 'header.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Book store.lk</title>
    <link rel="stylesheet" href="singup.css">
  </head>
  <body>
        <div class="wrapper">
            <h1>Sign in</h1>
            <form action="result.php" method="POST">
                <input type="text" name="username" placeholder="Username">
                
                <?php if(isset($username_error)) { ?>
                    <p> <?php echo $username_error ?> </p>
                <?php } ?>

                <input type="password" name="pwd" placeholder="Password">
                
                <?php if(isset($pwd_error)) { ?>
                    <p> <?php echo $pwd_error ?> </p>
                <?php } ?>
                <br>
                <?php if(isset($error)) { ?>
                    <p> <?php echo $error ?> </p>
                <?php } ?>
                <br />
                <input type="submit" name="submit" value="Login">
            </form>
            <div class="bottom-text">
                <input type="checkbox" name="remember" checked="checked"> Remember me
                <a href="#"> Forgot Passwod? </a>
                <br>
                <a href="register.php" target="_blank">Register Here</a>

            </div>
            <p><b>New User?</b></p>
                
            
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>