

<?php
include_once('connect.php');

if(!empty($_POST['Name']))
{
$Name = $_POST['Name'];
$location = $_POST['location'];
$type = $_POST['category'];
$contact = $_POST['tel'] . $_POST['email'];


$sql = "INSERT INTO `event`(`contact`, `event name`, `location`, `event type`) VALUES
('$contact','$Name','$location','$type')";
echo($sql);
$conn ->exec($sql);
header("Location: market area 2.php");
}
?>


<html>
  <head>
  <title>Event</title>
      <link rel="stylesheet" href="GGG.css">
      <meta charset="utf-8">
      <title></title>
      </head>
    <title></title>
  </head>
  <BODY background="GG.jpg"</BODY>
  <body>
    <Br>
    <Br>
    <h4 align="center">
  <font color="Black" size="50">Sign Up</font>

    <Br>
    <Br>
    <Br>
    <Br>


          <form method="POST" target="_self" id="form1"> 
          <h4 align="center">
          <div class="w3-section">
          <input class="w3-input w3-border w3-hover-border-black" style="width:370px; height:37px;"  type="text" name="Name" required  placeholder="Event Name.."><br><br>
          <Br>
            <font color="black" size="5">Contact</font><p>
            <font color="black" size=""></font>
            <input class="w3-input w3-border w3-hover-border-black" style="width: 250px; height: 25px;"  type="text" name="tel" required  placeholder="Telephone Number:"><br><br>
            <font color="black" size=""></font>
            <input class="w3-input w3-border w3-hover-border-black" style="width: 250px; height: 25px;"  type="text" name="email" required  placeholder="E-mail:"><br><br>
                <font color="black" size=""></font>
            <input class="w3-input w3-border w3-hover-border-black" style="width: 250px; height: 25px;"  type="text" name="page" required  placeholder="Page:"><br><br>
            <input class="w3-input w3-border w3-hover-border-black" style="width: 250px; height: 25px;"  type="text" name="location" required  placeholder="Location:"><br><br>
            <input class="w3-input w3-border w3-hover-border-black" style="width: 250px; height: 25px;"  type="text" name="category" required  placeholder="Category
:"><br><br>
            <input class="w3-input w3-border w3-hover-border-black" style="width: 250px; height: 25px;"  type="text" name="date" required  placeholder="Date:"><br><br>
            <input class="w3-input w3-border w3-hover-border-black" style="width: 250px; height: 25px;"  type="text" name="time" required  placeholder="Time:"><br><br>
            </div>

          <input class="w3-input w3-border w3-hover-border-black" style="width: 370px; height: 150px;"  type="text" name="about" required  placeholder="About  for Event.."><br><br>
          </div>
          <Br>
          <div class="w3-half">
          <button class="w3-button w3-black w3-right w3-section " type="submit" form="form1" value="Submit" name="submit" style="width: 150px; height: 55px;">
          <i class="fa fa-paper-plane"></i> Register
          </button>
          </form>
          </div>

  </body>
</html>
