<?php
    //include('log.php');

    // if(!isset($_SESSION['submit'])){
    //     header("location: index.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Store.lk</title>

    <link rel="stylesheet" href="singup.css">
</head>
<body>
    <div class="hero">
        <div class="logbox">
            <div class="img_hero">
                <img src="welcoming-new-employees-with-the-help-of-placards.jpg">
                <b id="welcome"> Welcome: <i><?php echo $login_session; ?> </i></b>
                <b id="logout"><a href="index.php"></a></b>
            </div>
        </div>
    </div>
</body>
</html>