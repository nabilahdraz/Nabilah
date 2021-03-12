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

.dropdown {
    float: left;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: #dd2013;
  }
  
  .show {
    display: block;
  }

</style>
<body>
<?php
    session_start();
    $myemail = $_SESSION['email'];
    ?>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="cake.php">Menu</a></li>
  <li><a href="faquser.php">FAQ</a></li>
  <div class="dropdown" style = "float : right">
 <button class="dropbtn" onclick="myFunction()"><?php echo $myemail;?>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="signIn.html">Logout</a>
  </div>
  </div> 
</ul>

   <?php
       extract($_POST);  

    $useradd=$_POST["address"];
    $userphone=$_POST["phone"];
    
    $Q1=$_POST["Q1"];
    $Q2=$_POST["Q2"];
    $Q3=$_POST["Q3"];
    $Q4=$_POST["Q4"];
    
   ?>

   <h3 align = "center">Cake Invoice</h3>
   <table align = "center">      
     <tr><td>Address</td>         <td>:</td>  <td><?php print($useradd) ?></td></tr>
     <tr><td>Phone no</td>        <td>:</td>  <td><?php print($userphone) ?></td></tr>
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
        $sql = "INSERT INTO user ( userAdd, userPhone, payment, orderDate, deliveryTime, userMssg, tiramisuCake,
        rvCake, carrotCake, chocoCake, total) VALUES ( '$useradd', '$userphone',
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
<p align = "center">Back to<a href="home.php"> <b>Home</a></b></p>

<script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
          if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
          }
        }
      }
      </script>

</body>
</html>