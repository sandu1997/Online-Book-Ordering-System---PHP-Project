<?php
    include("header.php");

    function function_alert($message){
        echo "<script>alert('$message');</script>";
    }
    function_alert("Thank you.Pay your Amount here.Your oder has been placed.Come Again..........");

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>payment</title>
        <style>
            .container {
                width: 100px;
                height:580px;
                clear: both;
                background-color: #fefbd8;
            }

            .container input {
                width: 100%;
                clear: both;
            }
            .back{
                background-image:url("bookstack (2).png");
                height:750px;
                background-size:cover;
            }
        </style>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        <script>
        function setColor(btn, color){
            var count=1;
            var property = document.getElementById(btn);
            if (count == 0){
                property.style.backgroundColor = "#FFFFFF"
                count=1;        
            }
            else{
                property.style.backgroundColor = "#7FFF00"
                count=0;
            }

        }
        </script>
    </head>

    <body>
    <div class="back">
        <div class="container">
            
            <h1>Payment</h1>
            <form action="" method="POST" target="" enctype="multiple/form-data">
                <div>
                    <label for="name">FullName</label>
                    <input type="text" name="name" value=" " required>
                </div>
                <br>

                <div>
                    <label for="cardname">Name on Card</label>
                    <input type="text" name="cardname" value=" " required>
                </div>
                <br>
                
                <div>
                    <label for="cardno">Card Number</label>
                    <input type="text" name="cardno" value=" ">
                </div>
                <br>

                <div>
                    <label for="cvc">CVC</label>
                    <input type="text" name="cvc" value=" ">
                </div>
                <br>

                <div>
                    <label for="amount">Amount</label>
                    <input type="int" name="amount" value=" ">
                </div>
                <br>

                <div>
                    <label for="date">Expiration</label>
                    <input type="int" name="date" placeholder="MM/DD/YYYY" value=""> 
                </div>
                <br><br>

                <input type="button" id="button" value="Pay" style="color:black" onclick="setColor('button','#101010')";/>
                <br>
                <input type="button" id="button" value="Cancel" style="color:black" onclick="setColor('button','#101010')";/>

                
            </form>
        </div>
    </div>
    </body>

</html>