<?php 
$servername="localhost"; // Host name
$email="root"; // Mysql email
$password=""; // Mysql password
$dbName="bakery"; // Database name

// Create connection
$conn = new mysqli($servername, $email, $password, $dbName);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Define $myname, $myemail and $mypassword
$myemail=$_POST['email'];
$mypassword=$_POST['password'];
$password = MD5($mypassword);

$sql = "SELECT email, password FROM register WHERE email='$myemail' and
password='$mypassword'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
if ($result->num_rows > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row["Id"];
        $email = $row["email"];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $myemail;
    }
 //redirect to file "home.php"
 header("location:home.php");
}
else
{
 echo "<p>Invalid Email or Password. Please try again.</p>";
}
$conn->close();
?>