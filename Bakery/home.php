<!DOCTYPE html>
<html>
<head>
    <title>The Golden Bakery</title>
    <link rel="stylesheet" href="style.css">
    <style>
      p {
  width: 910px;
  padding: 30px;
  border: 7px solid  #FFD700;;
  position: relative;
  top:100px;
  left: 18%;
  text-align: justify;
  font-family: Georgia, 'Times New Roman', Times, serif;
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

<h1> WELCOME</h1>
<p>
BIRTHDAY CAKES <br><br>
No birthday is complete without a birthday cake delivery. 
Even last minute orders can be delivered just in time for the birthday
in as little as four hours. Explore our (100% halal) Birthday Cake collection. 
All our birthday cakes come can even be delivered last minute and just in time 
for the birthday in as little as four hours. Choose from a wide variety of 
delicious cakes such as red velvet cakes or cheesecakes guaranteed to make the 
special day one to be remembered. Order now!! you can check our best cake section. 
</p>

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