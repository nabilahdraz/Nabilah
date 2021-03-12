
<html>
<head>
 <title>Main Menu | The Golden Bakery</title>
 <style>

   
body {font-family: Verdana, sans-serif; margin:0}

h3{
  font-family: Georgia, 'Times New Roman', Times, serif;
  position: relative;
  top: 190px;
  text-align: center;
  font-size:30px
}

p{
  font-family: Georgia, 'Times New Roman', Times, serif;
  position: relative;
  top: 199px;
  text-align: center;
  font-size:30px;

}
body {
  background-image: url('background4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}


</style>
</head>
<body>
      
  <h3>MAIN MENU </h3>
  

  <form action="bakeryList.php" method="post">
    <p><input type="submit" value="View Record" name="cmdView"></p>
  </form>

 <form action="searchRecord.php" method="post">
    <p><input type="submit" value="Search Record" name="cmdSearch"></p>
 </form>

 <form action="deleteList.php" method="post">
    <p><input type="submit" value="Delete Record" name="cmdDelete"></p>
 </form>

 <form action="logout.php" method="post">
    <p><input type="submit" value="Log Out" name="cmdlogout"></p>
 </form>
      
</body>
</html>