<?php
    include("header.php");

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Menu</title>
        <style>
            .container {
                width: 100px;
                height:550px;
                clear: both;
                background-color: #cccccc;
            }

            .container input {
                width: 100%;
                clear: both;
            }
            .back{
                background-image:url("124378copy.jpg");
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
    </head>

    <body>
    <div class="back">
        <div class="container">
            
            <h1>Book Entry</h1>
            <form action="bookEntry-manage.php" method="POST" target="_self" enctype="multiple/form-data">
                <div>
                    <label for="bookid">BookID</label>
                    <input type="text" name="bookid" value=" " required>
                </div>
                <br>

                <div>
                    <label for="bookname">Book Name</label>
                    <input type="text" name="bookname" value=" " required>
                </div>
                <br>

                <div>
                    <label for="file">File</label>
                    <input id="file" type="file" name="file">
                </div>
                <br>

                <div>
                    <label for="Authorname">Author Name</label>
                    <input type="text" name="authorname" value=" ">
                </div>
                <br>

                <div>
                    <label for="price">Price</label>
                    <input type="text" name="price" value=" ">
                </div>
                <br>

                <div>
                    <label for="category">Catogery</label>
                    <select name="category" id="category" placeholder="select your book type">
                        <option value="novel">Novel</option>
                        <option value="Technology">Technology</option>
                        <option type="programming language">Programming Language</option>
                        <option type="spoken english">Spoken English</option>
                        <option type="Children story book">Children Story Book</option>
                    
                    </select>
                </div>
                <br><br>

                <button type="submit"> Submit</button>
                <button type="reset"> Reset</button>

                
            </form>
        </div>
    </div>
    </body>

</html>