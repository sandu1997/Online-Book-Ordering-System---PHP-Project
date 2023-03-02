<?php
    include "db.php";

    if(isset($_POST['submit'])){
        $BookID =$_POST['bookid'];
        $BookName = $_POST['bookname'];
        $AuthorName = $_POST['authorname'];
        $Price = $_POST['price'];
        $Catogery = $_POST['category'];
        if($BookName != ' ' || $AuthorName != ''){
            //insert query of sql
            $query = mysqli_query("INSERT INTO bookEntry (BookID,BookName,AuthorName,Price,Catogery) VALUES ('bookid','bookname','authorname','price','category')");
            echo "<br><br><span>Data Inserted Successfully</span>";

        }else{
            echo "<p> Insertion Failed</br> Some Fields are Blank</p>";

        }
        mysql_close($con);
    }
?>