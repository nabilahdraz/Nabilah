<html>
<head>
  <title>Update Record | The Golden Bakery</title>
</head>
<style>
body {font-family: Georgia, 'Times New Roman', Times, serif; margin:0}
body{background-color: rgb(250, 249, 169);}

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

    extract($_POST);

    // Attempt update query execution
    $sql = "UPDATE customer SET customerName='".$name."',
    customerAdd='".$address."', customerPhone='".$phone."',
    payment='".$payment."', orderDate ='".$orderdate."', deliveryTime = '".$deliverytime."',
    customerMssg = '".$message."', tiramisuCake ='".$Q1."', rvCake ='".$Q2."', carrotCake ='".$Q3."',
    chocoCake ='".$Q4."', total ='".$total."' WHERE id='".$id."'";

    if(mysqli_query($conn, $sql)){
        echo "Records were updated successfully.</br></br>
        <a href='bakeryList.php'>View Updated Record</a>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);
    ?>
    