<!DOCTYPE html>

<html lang = "en">
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
    <body>
        
        <div class ="block">
         
         <!--searchbar-->
         <form action ="BDD_ProductResults.php" method="POST">
             <input type="text" name="search" placeholder="Search">
             <button type="submit" name="submit-search">SUBMIT</button>
         </form>
         <!--searchbar end-->
         
         
         <!--shows initial product list-->
         <h1>Welcome to BDD Inventory Management!</h1>
         
         <div class="product-list">
             <?php
             include "BDD_DB_Connect.php";
             $sql = "SELECT * FROM products";
             $result = mysqli_query($conn, $sql);
             $queryResults = mysqli_num_rows($result);
             
             if ($queryResults > 0) {
                 while ($row = mysqli_fetch_assoc($result)) {
                     echo "<div><p>ID: ".$row['ProductID']."</p>
                                <p>Name: ".$row['Name']."</p>
                                <p>Amount: ".$row['Amount']."</p>
                                <p>Location: ".$row['Location']."</p>
                                <p>Price: ".$row['Price']."</p>
                            </div>";
                 }
             }
             ?>
         </div>
          <!--end of initial product list-->  
            
          
         
    </body>
</html>