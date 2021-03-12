<html>
<head>
  <title>Invoice</title>
</head>
<style>
  th, td {text-align: left;}

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: hsl(41, 79%, 41%);
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #dd2013;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
body{background-color: rgb(250, 249, 169);}

</style>
<body>

 <ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="menu.html">Menu</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="faq.html">FAQ</a></li>
  <li style="float:right"><a href="login.html">Login</a></li>
 </ul>

   <?php
       extract($_POST);  

    $custname=$_POST["name"];
    $custadd=$_POST["address"];
    $custphone=$_POST["phone"];
    
    $Q1=$_POST["Q1"];
    $Q2=$_POST["Q2"];
    $Q3=$_POST["Q3"];
    $Q4=$_POST["Q4"];
    
   ?>

   <h3 align = "center">Cake Invoice</h3>
   <table align = "center"> 
     <tr><td>Name</td> <td>:</td>  <td><?php print($custname) ?></td></tr>       
     <tr><td>Address</td>         <td>:</td>  <td><?php print($custadd) ?></td></tr>
     <tr><td>Phone no</td>        <td>:</td>  <td><?php print($custphone) ?></td></tr>
     <tr><td>Payment method</td>        <td>:</td>  <td><?php print($payment) ?></td></tr>
     <tr><td>Order Date</td>    <td>:</td>  <td><?php print($orderdate) ?></td></tr>
     <tr><td>Delivery Time</td>    <td>:</td>  <td><?php print($deliverytime) ?></td></tr>
     <tr><td>Card Message</td>    <td>:</td>  <td><?php print($message) ?></td></tr>
   </table>    

<br>
  <table style="width:50%" align = "center">
     <tr>
       <th>Cake</th>
       <th>Price (RM)</th>
       <th>Quantity</th>
       <th>Subtotal (RM)</th>
     </tr>

    <tr>
    <td>Tiramisu Cake</td>
    <td>60.00</td>
    <td><?php print($Q1) ?></td>

    <td><?php $a = 60.00;
               $b = $a*$Q1;
       
       echo number_format ((float)$b,2,'.',''); ?></td>
     </tr>
     
     <tr>
     <td>Red Velvet Cake</td>
     <td>60.00</td>
     <td><?php print($Q2) ?></td>

     <td><?php $c = 60.00;
               $d = $c*$Q2;

       echo number_format ((float)$d,2,'.',''); ?></td>
     </tr>
   
    <tr>
    <td>Carrot Cake</td>
    <td>65.00</td><td><?php print($Q3) ?></td>

    <td><?php $e = 65.00;
              $f = $e*$Q3;

       echo number_format ((float)$f,2,'.',''); ?></td>
    </tr>

    <tr>
    <td>Chocolate Cake</td>
    <td>65.00</td><td><?php print($Q4) ?></td>

    <td><?php $g = 65.00;
              $h = $g*$Q4;

       echo number_format ((float)$h,2,'.',''); ?></td>
    </tr>

    <br>
    <tr>
             <td></td>
	     <td></td>
	     <td align="right"> <b>Total:</b></td>
	     <td align="right">
                        <b>RM<?php
			$T=$b+$d+$f+$h;
			echo number_format ((float)$T,2,'.','');
			?>&nbsp;<b></td>
    </tr>
  </table>

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
        
        //create query
        $sql = "INSERT INTO customer (customerName, customerAdd, customerPhone, payment, orderDate, deliveryTime, customerMssg, tiramisuCake,
        rvCake, carrotCake, chocoCake, total) VALUES ('$custname', '$custadd', '$custphone',
        '$payment','$orderdate','$deliverytime','$message', '$Q1','$Q2', '$Q3', '$Q4', '$T')";

        //execute query
        if ($conn->query($sql) === TRUE) {
            echo "<p><center> New record created successfully </center></p>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        //close connection
        $conn->close();
        
 ?>


 <br>

<p align ="center"><b>*THANK YOU FOR ORDERING FROM US</b></p>
<p align = "center">Back to<a href="index.html"> <b>Home</a></b></p>

</body>
</html>