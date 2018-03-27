<?php
include_once('connect.php');

if(! empty($_POST['Name'])&& !empty($_POST['Lastname'])&& !empty($_POST['Address']) && !empty($_POST['Email']) && !empty($_POST['Telephonenumber']))
{
$Name = $_POST['Name'];
$Lastname = $_POST['Lastname'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];
$phone = $_POST['Telephonenumber'];

$sql = "INSERT INTO `seller`( `name`, `tel`, `address`) VALUES 
('$Name $Lastname','$phone','$Address')";
echo($sql);
$conn ->exec($sql);
header("Location: shop.php");
}
?>


<!DOCTYPE html>
<html>
<title>Seller</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: rgb(22, 18, 18);
    line-height: 1.8;
}
</style>
<body>
<body style="background-image:url('9.jpg')"></body>
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h1 class="w3-center" color="red">Sign up</h1>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
      </div>
      <form method="POST" target="_self" id="form1">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>     
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Lastname" required name="Lastname">
          </div>
        </div>
        <br>
        <input class="w3-input w3-border" type="text" placeholder="Address" required name="Address">
        <div class="w3-half">
          <br>    
        <div class="w3-row-padding" style="margin:0 -318px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>     
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Telephonenumber" required name="Telephonenumber">
          </div>
        </div>
        <br>
        <div class="w3-half">
        <button class="w3-button w3-black w3-right w3-section" type="submit" form="form1" value="Submit" >
          <i class="fa fa-paper-plane"></i> Next
          
        </button>  
    </div>
  </div>
</div>
<!-- Add Google Maps -->
<center>
<script>

}
</script>
</center>
</body>
</html>
