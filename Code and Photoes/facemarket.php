
<?php
include_once('connect.php');

if(! empty($_POST['name'])&& !empty($_POST['owner'])&& !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['address']))
{
$Name = $_POST['name'];
$owner = $_POST['owner'];
$tel = $_POST['let'];
$Email = $_POST['email'];
$Address = $_POST['address'];

$sql = "INSERT INTO `market`(`market name`, `contact`, `location`, `owner name`) VALUES
('$Name','$phone','$Address','$owner')";
echo($sql);
$conn ->exec($sql);
header("Location: market area 2.php");
}
?>








<!DOCTYPE html>
<html>
<title>Lockcate</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Lato", sans-serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style> 

<header class="w3-display-container w3-content w3-wide" style="max-width:3000px;min-width:500px" id="home">
  <img class="w3-image" src="88.jpg" alt="Hamburger Catering" width="3000" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge "></h1>
    
    <body>
   
<h4 align="center">
    
       <div class="w3-container w3-myfont">
       <p class="w3-jumbo w3-text-white">Sign Up</p>
   </div>

      <form method="POST" target="_self" id="form1">  
    <div class="w3-section">
      <label></label>
      <input class="w3-input w3-border w3-hover-border-black " style="width:100%;" type="text" name="name" required  placeholder="Market Name"><br><br>
    </div>
    <div class="w3-section">
      <label></label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="owner" required placeholder=" Owner market"><br><br>
    </div>
    <div class="w3-section">
      <label></label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="tel" required placeholder="Tel">
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="email" required placeholder="Email">
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="page" required placeholder="Page">
    </div>
    <div class="w3-section">
      <label></label>
      <input class="w3-input w3-border w3-hover-border-black w3-xxxlarge" style="width:100%;" name="address" required  placeholder="address"><br><br>
    </div>
    <div class="w3-half">
    <button class="w3-button w3-black w3-right w3-section" type="submit" form="form1" value="Submit" name="submit" >
          <i class="fa fa-paper-plane"></i> Next
          
        </button>   Register
  </form>

</div>

</header>



  </body>
</html>




