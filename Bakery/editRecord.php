<html>
<head>
 <title>The Golden Bakery</title>
</head>

<style>
body {
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
    die("Connection failed: " . $conn->connect_error); }

$id=$_REQUEST['id'];
$query = "SELECT * from customer where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h2>Update Record</h2>

<div>
<form name="form" method="post" action="updateRecord.php"> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['Id'];?>" />
<p><input type="text" name="name" size= "30" value="<?php echo $row['customerName'];?>" /></p>
<p><input type="text" name="address" size= "30" value="<?php echo $row['customerAdd'];?>"/></p>
<p><input type="text" name="phone"  value="<?php echo $row['customerPhone'];?>" /></p>
<p><input type="text" name="payment"  value="<?php echo $row['payment'];?>" /></p>
<p><input type="date" name="orderdate" value="<?php echo $row['orderDate'];?>" /></p>
<p><input type="text" name="deliverytime" value="<?php echo $row['deliveryTime'];?>" /></p>
<p><input type="text" name="message" size= "30" value="<?php echo $row['customerMssg'];?>" /></p>
<p><input type="text" name="Q1" value="<?php echo $row['tiramisuCake'];?>" /></p>
<p><input type="text" name="Q2" value="<?php echo $row['rvCake'];?>" /></p>
<p><input type="text" name="Q3" value="<?php echo $row['carrotcake'];?>" /></p>
<p><input type="text" name="Q4" value="<?php echo $row['chocoCake'];?>" /></p>
<p><input type="text" name="total" value="<?php echo $row['total'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

</div>
</div>
</body>
</html>
