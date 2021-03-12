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

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //create query
        $sql = "INSERT INTO register (fullName, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            header ("Location: signIn.html");
        }
        else
        {
            echo"Error :".$sql;
        }
        
        //close connection
        $conn->close();
        
 ?>
?>