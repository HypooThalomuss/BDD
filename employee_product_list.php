<!DOCTYPE html>
<html lang = "en">
	<head>
		<!--page title-->
		<title>Product List</title>
		<!--css-->
		<link rel="stylesheet" type="text/css" charset="utf-8" href="inventory_fp_css.css">
		<!--Google Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	</head>
	<body>
		<div class = "block">
		
		<h1>Product List</h1>
		
		<p>
			<a href="employee_function_select.html">Back to employee home page</a>
		</p>
		<hr>
		
                <table>
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
                            . "<td>".$row['Name']."</td>"
                            . "<td>".$row['Location']."</td>"
                            . "<td>".$row['Amount']."</td>"
                            . "<td>".$row['Price']."</td>"
                            . "<td><form action='changeQuantity.php'>"
                            . "<input type='text' name='productID' value=".$row['ProductID']." readonly hidden>"
                            . "<input type='submit' value='Change Quantity' class='buttontype2'>"
                            ."</td>"
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

