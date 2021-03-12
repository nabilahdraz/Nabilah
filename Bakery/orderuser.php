<!DOCTYPE html>
<html>
<head>
    <title>Menu | The Golden Bakery</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2{font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;}
    </style>
</head>
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
    <form action="invoiceuser.php" method = "post">

        <h2 align = "center">Order Details</h2>
        <p align = "center"><i>Please fill in this form*</i></p>
        <table align = "center">

            <tr>
                <td>Address: </td>
                <td> <input type ="text" name= "address" size= "30" required></td>
            </tr>
    
            <tr>
                <td>Phone No: </td>
                <td> <input type ="text" name= "phone" size="10" required></td>
            </tr>
    
            <tr>
                <td>Payment Method:</td>
                <td><select name="payment" required>
                    <option value="Select a payment">Select a payment</option>
                    <option value="VisaCard">VisaCard</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Online Banking">Online Banking</option>
                    <option value="COD">COD</option>
                </select>
                </td>
             </tr>
    
             <tr>
                <td>Order Date: </td>
                <td> <input type ="date" name= "orderdate" size="10" required></td>
            </tr>
    
            <tr>
                <td>Delivery Time:</td>
                <td><select name="deliverytime" required>
                    <option value="Select a time">Select a time</option>
                    <option value="11am - 1pm">11am - 1pm </option>
                    <option value="1pm - 3pm">1pm - 3pm</option>
                    <option value="3pm - 5pm">3pm - 5pm</option>
                    <option value="5pm - 7pm">5pm - 7pm</option>
                </select>
                </td>
             </tr>
    
            <tr>
                <td>Card Message:</td>
                <td><textarea name="message" rows="6" cols="30" required>
                </textarea></td>
            </tr>
        </table>
        
        <table align = "center">
            &nbsp;
    
            <tr>
                <th>Cake</th>
                <th>Price(RM) </th>
                <th>Quantity</th>
            </tr>
    
            <tr>
                <th>Tiramisu Cake</th>
                <th>60.00</th>
                <th><input type="text" name="Q1" size="10" required></th>
            </tr>
    
            <tr>
                <th>Red Velvet Cake</th>
                <th>60.00</th>
                <th><input type="text" name="Q2" size="10" required></th>
            </tr>
    
            <tr>
                <th>Carrot Cake</th>
                <th>65.00</th>
                <th><input type="text" name="Q3" size="10" required></th>
            </tr>
    
            <tr>
                <th>Chocolate Cake</th>
                <th>65.00</th>
                <th><input type="text" name="Q4" size="10" required></th>
            </tr>
            <br>
                <tr>
                    <td><input type="submit" name="submitBtn" value="Submit"></td>
                </tr>
            </table>
    
    </form>

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