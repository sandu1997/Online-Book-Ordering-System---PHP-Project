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
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="register.css">

    <title>Register</title>
  </head>
  <body>

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    
                    <h1 class="text-center">Register</h1> 
                    <p>Create your account.It's free and only take a minute.</p>
                    <span class="error" style="color:red"> *reruired field </span>
                    <br>
              
                    
                    <label class="label col-md-5 control-label">UserName :</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="username" placeholder="Enter user name">
                      
                    </div>

                    <label class="label col-md-5 control-label">Password :</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
                      <small>Password must be 6 characters</small>
                    </div>

                    <label class="label col-md-5 control-label">Confirm Password :</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" name="pass" placeholder="Enter again password">
                    </div>

                    <label class="label col-md-5 control-label">Full Name :</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="fullname" placeholder="Enter your name">
                    </div>

                    <label class="label col-md-5 control-label">Phone Number :</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="number" placeholder="Enter your mobile number">
                    </div>

                    <label class="label col-md-5 control-label">Email Address :</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="email" placeholder="Enter your Email">
                    </div>

                    <a href="#"><div class="btn btn-info" name="submit">Submit</div></a>

                  </div>
                  <div>
            <div>
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