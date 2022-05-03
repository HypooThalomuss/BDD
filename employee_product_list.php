<!DOCTYPE html>
<html lang = "en">
	<head>
		<!--page title-->
		<title>Product List</title>
		<!--css-->
		<link rel="stylesheet" type="text/css" charset="utf-8" href="inventory_fp_css.css">
		<!--Google Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
                <!--w3css-->
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <!--w3css flat colors-->
                <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
	</head>
	<body>
		<div class = "block">
		
		<h1>Product List</h1>
		
		<p>
			<a href="employee_function_select.html">Back to employee home page</a>
		</p>
		<hr>
		
                <table class="w3-striped w3-flat-amethyst">
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>In Stock</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                        include 'DBConnect.php';
                        
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>"
                            . "<td class='w3-text-black'>".$row['Name']."</td>"
                            . "<td class='w3-text-black'>".$row['Location']."</td>"
                            . "<td class='w3-text-black'>".$row['Amount']."</td>"
                            . "<td class='w3-text-black'>".$row['Price']."</td>"
                            . "<td> <a href='changeQuantity.php?productID=".$row['ProductID']."' class='w3-btn w3-round-large w3-indigo' >Change Quantity</a> </td>"
                            . "</tr>";
                            }
                        }
                    ?>
                </table>
		
		<p>
			<a href="employee_function_select.html">Back to employee home page</a>
		</p>
		</div>
		
		<!--code taken from https://www.geeksforgeeks.org/html-window-alert-method/ -->
		<script>
			function changeQuantity() {
            			window.open("quantity_form.html", "change quantity", "width=400,height=125");
        		}
		</script>
	</body>
</html>


