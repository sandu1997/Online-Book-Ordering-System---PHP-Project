<?php
    session_start();
    include("manage_cart.php");
    include("header.php");
    
    //require_once('db.php');
    //session_destroy();
    
    function getItem(){
      include "db.php";


            $sql = "SELECT * FROM `cart`";

            if ($result=mysqli_query($con,$sql))
            {
                $rownum = mysqli_num_rows($result);
                if($rownum > 0){
                    return $result;
                }
            } else {
                echo "$sql". mysqli_error($con);
            }
        }
    
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
    <link rel="stylesheet" href="instyle.css">
  </head>
  <body>

  
    <div class="top">   
            <h1 style="color:white"><b><center>Godage BookStore</center></b></h1>
            <h3><b><marquee> Welcome to Large BookStore</marquee></b></h3>
    </div>
    
    

    

    <div class="container mt-5" >
        <div class="row">
        <?php
            $result = getItem();
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card" style="width: 15rem;">
                        <img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="book1" name="image">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $row['Book Name']; ?></h5>
                            <p class="card-text">Price : <?php echo $row['Book Price']; ?></p>
                            <a href="cart.php"><button type="submit" name="Add_To_Cart" class="btn btn-info"> Add To Cart</button></a>
                            <input type="hidden" name="Item-Name" value="book1">
                            <input type="hidden" name="Price" value="500">
                            <input type="hidden" name="id" value="<?php echo $row['Book ID']; ?>">
                        </div>
                    </div> 
                </form>
            </div>
        <?php } ?>  
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
<body>
</html>