<html>
<head>
 <title>The Golden Bakery</title>
</head>

<style>
body {font-family: Georgia, 'Times New Roman', Times, serif; margin:0;
background-color: rgb(250, 249, 169);

}

</style>
</html>

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
  
  //escape special characters in a string
  $customer = mysqli_real_escape_string($conn, $_POST['customer_name']);

  //create and execute query
  $sql = "SELECT * FROM customer WHERE customerName LIKE '%$customer%'";
  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo 'Selected record as the following: <br><br>';
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
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
        ?>
        <td><a href="editRecord.php?id=<?php echo $row["Id"]; ?>">UPDATE</a></td></tr>
        <?php
        echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

  //close connection 
  $conn->close();

?>