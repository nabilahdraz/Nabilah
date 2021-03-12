<?php 
$servername="localhost"; // Host name
$myemail="root"; // Mysql email
$mypassword=""; // Mysql password
$dbName="bakery"; // Database name

// Create connection
$conn = new mysqli($servername, $myemail, $mypassword, $dbName);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Define $myusername and $mypassword
$myemail=$_POST['email'];
$mypassword=$_POST['password'];

$sql = "SELECT email, password FROM admin WHERE email='$myemail' and
password='$mypassword'";
$result = $conn->query($sql);


// Mysql_num_row is counting table row
if ($result->num_rows > 0)
{
 //redirect to file "adminMenu.php"
 header("location:adminMenu.php");
}
else
{
 echo "<p>Wrong Email or Password. Please try again.</p>";
}
$conn->close();
?>
