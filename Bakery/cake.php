<!DOCTYPE html>
<html>
<head>
    <title>Menu | The Golden Bakery</title>
    <link rel="stylesheet" href="style.css">
<style>
p{
font-size: 15px;
font-family: Georgia, 'Times New Roman', Times, serif;
}

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

  <h2>Menu</h2>
  <p style align ="center">We are dedicated to providing you with delicious, fresh, 
  gluten-free, treats.</p> 
  <p style align ="center">We make everything from scratch daily with only the best 
  ingredients! Choose from our signature cakes, weekly and holiday for specials events.</p>
  <br><br>

<div class="gallery">
<img src="TM.jpg" alt="Cinque Terre" width="100">
<div class="desc"><p align = "center">Tiramisu Cake</p>
<p align = "justify">Cake flavored with espresso filled with layers
of mascarpone cheese and cappuccino cream.</p>
<p align = "center">RM60</p></div>
</div>

<div class="gallery">
<img src="RV.jpg" alt="Forest" width="100" height="400">
<div class="desc"><p align = "center">Red Velvet Cake</p>
<p align = "justify">Layers of moist red velvet cake and creamy cheesecake, 
  covered in cream cheese frosting</p>
<p align = "center">RM60</p></div>
</div>

<div class="gallery">
<img src="carrotcake.jpg" alt="Northern Lights" width="100" height="400">
<div class="desc"> <p align = "center">Carrot Cake</p>
<p align = "justify">Filled with grated carrots, walnuts and 
  raisins, covered with cream cheese.</p>
<p align = "center">RM65</p></div>
</div>

<div class="gallery">
<img src="choco.jpg" alt="Mountains" width="100">
<div class="desc"><p align = "center">Chocolate Cake</p>
<p align = "justify">Moist chocolate cake with chocolate frosting, and 
        espresso powder.</p>
          <p align = "center">RM65</p></div>
</div>
<br>
  <p align = "center">Click here <a href="orderuser.php"> <b>Order Now</a></b></p>

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