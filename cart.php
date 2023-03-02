<?php
    session_start();
    include("header.php");
    //require_once("manage_cart");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>cart</title>
    <link rel="stylesheet" href="instyle.css">
  </head>
  <body>
    <div class="container" >
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>

            </div>

            <div class="col-lg-9">
                <table class="table">
                                    
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Book ID</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Book Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                        print_r($value);
                                        $total=$total+$value['Price'];
                                        echo"
                                        <tr>
                                            <td>1</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]</td>
                                            <td><input class='text-center' type='number' value='$value[Quantity]' min='1'max='10' </td>

                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                                
                                            </td>
                                        </tr>";
                                }
                            
                            }
                        ?>
                        
                    </tbody>
                    </table>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total :</h4>
                    <h6 class="text-right"><?php echo $total ?></h6>
                    <br>

                    <a href="payment.php" target="_blank">Payment</a>
                </div>
            </div>

