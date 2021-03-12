<html>
<head>
 <title>List of Customer</title>
</head>

<style>
body {font-family: Georgia, 'Times New Roman', Times, serif; margin:0}
body{background-color: rgb(250, 249, 169);}

</style>

<body>
 <h3 align="center">The Golden Bakery</h3>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bakery";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 //create and execute query
 $sql = "SELECT * FROM customer";
 $result = $conn->query($sql);
 //check if records were returned
 if ($result->num_rows > 0) {
 //create a table to display the record
 echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';

 echo '<tr><td align="center"><b>No</b></td>
 <td align="center"><b>Customer Name</b></td>
 <td align="center"><b>Customer Address</b></td>
 <td align="center"><b>Customer Phone No</b></td>
 <td align="center"><b>Payment</b></td>
 <td align="center"><b>Order Date</b></td>
 <td align="center"><b>Delivery Time</b></td>
 <td align="center"><b>Card Message</b></td>
 <td align="center"><b>Tiramisu Cake</b></td>
 <td align="center"><b>Red Velvet Cake</b></td>
 <td align="center"><b>Carrot Cake</b></td>
 <td align="center"><b>Chocolate Cake</b></td>
 <td align="center"><b>Total (RM)</b></td>
 </tr>';

 // output data of each row
 while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td align="center">'.$row["Id"].'</td>';
  echo '<td align="center">'.$row["customerName"].'</td>';
  echo '<td align="center">'.$row["customerAdd"].'</td>';
  echo '<td align="center">'.$row["customerPhone"].'</td>';
  echo '<td align="center">'.$row["payment"].'</td>';
  echo '<td align="center">'.$row["orderDate"].'</td>';
  echo '<td align="center">'.$row["deliveryTime"].'</td>';
  echo '<td align="center">'.$row["customerMssg"].'</td>';
  echo '<td align="center">'.$row["tiramisuCake"].'</td>';
  echo '<td align="center">'.$row["rvCake"].'</td>';
  echo '<td align="center">'.$row["carrotcake"].'</td>';
  echo '<td align="center">'.$row["chocoCake"].'</td>';
  echo '<td align="center">'.$row["total"].'</td>';
  echo '</tr>';
 }
}
 else {
    echo "0 results"; //if no record found in the database
 }
 
 //close connection
 $conn->close();
 echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>