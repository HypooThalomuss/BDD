<!DOCTYPE html>
<html lang="en">
<head>
    <!--name of page (may change idk)-->
    <title>BDD Inventory Management System</title>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" charset="utf-8" href=inventory_fp_css.css>
    <!--Google Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <!--Search Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<?php
//connect to database
include 'BDD_DB_Connect.php';
?>

<div class="block">
    

    
    <center><h1>Search BDD Inventory Management</h1>
    <!--searchbar-->
	
	<form action ="BDD_ProductResults.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
	</form>
	
    <!--searchbar end-->   
    </center>
<!--start of filtering results-->
         <?php
         if (isset($_POST['submit-search'])) {
             $search = mysqli_real_escape_string($conn, $_POST['search']);
             $sql = "SELECT * FROM products WHERE ProductID LIKE '%$search%' OR Name LIKE '%$search%' OR Location LIKE '%$search%' OR Amount LIKE '%$search%' OR Price LIKE '%$search%'";
             $result = mysqli_query($conn, $sql);
             $queryResult = mysqli_num_rows($result);
	     
	     //actually prints the product list
	     ?><div class="productlist"><table><tr><?php 
             if ($queryResult > 0) {  //check for matches in the search and displays products that match
		     while ($row = mysqli_fetch_assoc($result)) { ?><td><div class="item"><?php
                     echo "<div><p>ID: ".$row['ProductID']."</p>
                                <p>Name: ".$row['Name']."</p>
                                <p>Amount: ".$row['Amount']."</p>
                                <p>Location: ".$row['Location']."</p>
                                <p>Price: ".$row['Price']."</p>
                            </div>";
		     }?></div><?php
		 }
             else { //if there are no results
                 echo "there are no results from your search :(";
		 }?></td></tr></table></div><?php
		 //end of printing product list
         }
         
         ?>
         <!--end of filtering results-->
</div>
</html>
