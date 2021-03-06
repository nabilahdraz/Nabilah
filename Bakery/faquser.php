<!DOCTYPE html>
<html>
<head>
    <title>FAQ | The Golden Bakery</title>
    <link rel="stylesheet" href="style.css">
<style>

h2{
  font-family: Georgia, 'Times New Roman', Times, serif;
}

p{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 15px;
}

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

<h2>Odering</h2>

<button class="accordion">- How do i place an order?</button>
<div class="panel">
  <p>Step 1 : Go to menu page, survey the cakes that you want. After that, click "order now" to fill the form that we have provided.<p>

<p>Step 2 : On the order page, fill your address, phone no, select your payment method, select your preferred delivery date and time, include a heartfelt message and quantity. Click "submit" and you will then proceed to the cake invoice page.</p>

<p>Step 3 : Kick back and relax whilst we get your freshly baked cake delivered to your doorstep.</p>
</div>

<button class="accordion">- What payment options are available to me? </button>
<div class="panel">
  <p>We accept VisaCard, MasterCard, online banking and COD.</p>
</div>

<button class="accordion">- Can i place an order today for a future date?</button>
<div class="panel">
  <p>Of couse! you may place an order from assorment of cakes here anytime and we will have it delivered to your doorstep.</p>
</div>

<h2>Delivery</h2>

<button class="accordion">- Where does The Golden Bakery delivery to?</button>
<div class="panel">
  <p>We currently only serve Cheras and Ampang exclusively but will expand to other states throughout Malaysia in due time. Stay Tuned!
</div>

<button class="accordion">- Does The Golden Bakery charge a delivery fee? </button>
<div class="panel">
  <p>Yes, we do charge delivery fees for orders based on your distance.
</div>

<button class="accordion">- How do i check my delivery status? </button>
<div class="panel">
  <p>As for now, we do not have a live tracking system for our customer yet;but be rest assured that we will deliver your orders within the time slot you have pre-selected.
</div>
<br><br>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

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