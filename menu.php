<?php
   include_once 'header.php'; 

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Menu</title>
        <style>
           

            /* Split the screen in half */
            .split {
                height: 100%;
                width: 50%;
                position: fixed;
                z-index: 1;
                top: 0;
                overflow-x: hidden;
                padding-top: 20px;
            }

            /* Control the left side */
            .left {
                left: 0;
                background-color: yellow;
            }

            /* Control the right side */
            .right {
                right: 0;
                background-color: #ffffff;
            }

            /* If you want the content centered horizontally and vertically */
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            /* Style the image inside the centered container, if needed */
            .centered img {
                width: 150px;
                border-radius: 50%;
            }
        </style>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div class="split left">
            <div class="centered">
                <h1>Menu</h1>
                <img src="bookstack.png" alt="bookstack">
                <h2><a href="bookEntry.php" target=" ">Product Entry</a></h2>
                <h2><a href="#">View Entry</a></h2>

            </div>
        </div>

        <div class="split right">
            <div class="centered">
                <img src="bookstack.png" alt="bookstack">   
                
            </div>
        </div>

    </body>
            <?php
                
            ?>
    
        
    
</html>