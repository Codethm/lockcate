<?php
include_once('connect.php');


if(! empty($_POST['Owner'])&& !empty($_POST['Store'])&& !empty($_POST['Product']) && !empty($_POST['Description']) && !empty($_POST['Telephone']) && !empty($_POST['Email']) && !empty($_POST['Page']))
{


  $idsell = $conn ->lastInsertId();

  
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} 


$Owner = $_POST['Owner'];
$Store = $_POST['Store'];
$Product = $_POST['Product'];
$Description = $_POST['Description'];
$phone = $_POST['Telephone'];
$email = $_POST['Email'];
$page = $_POST['Page'];


$sql = "INSERT INTO `store`(`Email`, `เบอร์ติดต่อ`, `seller_idseller`,`ชื่อเจ้าของร้าน`, `สินค้า`, `คำอธิบายสินค้า`, `ชื่อร้าน`) VALUES
('$email','$phone','$idsell','$Owner','$Product','$Description','$Store')";
echo($sql);
$conn ->exec($sql);
//header("Location: index.php");
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
<h1 class="w3-center" color="white">Store registration</h1>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
      </div>
      
      <form method="POST" target="_self" id="form1" enctype="multipart/form-data">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Owner's name" required name="Owner">
          </div>     
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Store name" required name="Store">
          </div>
        </div>
        <br>
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Product" required name="Product">
          </div>     
          &nbsp;&nbsp;<br> <br><br>
        <input class="w3-input w3-border" type="text" placeholder="Product Description" required name="Description">
        <div class="w3-half">
          <br>                  
        <div class="w3-row-padding" style="margin:0 -318px 8px -16px">
          <div class="w3-half"><h5>Contact</h5>
            <input class="w3-input w3-border" type="text" placeholder="Telephone Number" required name="Telephone">
          </div>     
          <div class="w3-half"><br><br>
            <input class="w3-input w3-border" type="text" placeholder="E-mail" required name="Email">
          </div>
        </div>
        <br>
        <input class="w3-input w3-border" type="text" placeholder="Page" required name="Page">
      <br>
 <input type="file" name="fileToUpload" >
    <br><div class="w3-half">
    <br>
    <button class="w3-button w3-black w3-right w3-section" type="submit" form="form1" value="Submit" name="submit" >
          <i class="fa fa-paper-plane"></i> Next
          
        </button>  
  </form>
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
