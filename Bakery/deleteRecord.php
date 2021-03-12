<html>
<head>
 <title>The Golden Bakery</title>
</head>
<style>
body {font-family: Georgia, 'Times New Roman', Times, serif; margin:0}
body{background-color: rgb(250, 249, 169);}

</style>
<body>
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
 //get input value
 $name=$_POST['customer_name'];
 // sql to delete a record
 $sql = "DELETE FROM customer WHERE customerName='$name'";
 if ($conn->query($sql) === TRUE) {
 echo "Record deleted successfully";
 }
 else {
 echo "Error deleting record: " . $conn->error;
 }
 //close connection
 $conn->close();
 echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>
