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
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Owner's name" required name="Name">
          </div>     
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Store name" required name="Email">
          </div>
        </div>
        <br>
          <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Product" required name="Name">
          </div>     
          &nbsp;&nbsp;<br> <br><br>
        <input class="w3-input w3-border" type="text" placeholder="Product Description" required name="Message">
        <div class="w3-half">
          <br>                  
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -318px 8px -16px">
          <div class="w3-half"><h5>Contact</h5>
            <input class="w3-input w3-border" type="text" placeholder="Telephone Number" required name="Name">
          </div>     
          <div class="w3-half"><br><br>
            <input class="w3-input w3-border" type="text" placeholder="E-mail" required name="Email">
          </div>
        </div>
        <br>
        <input class="w3-input w3-border" type="text" placeholder="Page" required name="Message">
      </form>
      <br>
      Insert picture : <form name="form1" method="post" action="PageUploadToMySQL2.php" enctype="multipart/form-data">
 <input type="file" name="filUpload" >
    <br><div class="w3-half">
    <br>
    <button class="w3-button w3-black w3-right w3-section" type="button" onclick="window.location='output event.php'"  type="submit"  >
      <i class="fa fa-paper-plane"></i> Register
      
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