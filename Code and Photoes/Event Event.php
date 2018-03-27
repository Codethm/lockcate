<!DOCTYPE html>
<html>
<title>Event</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}



.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#Store" class="w3-bar-item w3-button w3-xxlarge"  onclick="window.location='Output event.php'"   >Home</a>
    <a href="#Store" class="w3-bar-item w3-button w3-xxlarge"  onclick="window.location='output store.php'"   >Store</a>
    <a href="#Market" class="w3-bar-item w3-button w3-hide-small w3-xxlarge"  onclick="window.location='Lockcate_market.php'" >Market</a>
    <a href="#Evant" class="w3-bar-item w3-button w3-hide-small w3-xxlarge" onclick="window.location='Event Event.php'"> Event</a>

    <a href="#" class="w3-bar-item w3-button w3-hide-medium w3-right w3-hover-red w3-xxlarge">
      <input class="w3-input w3-border w3-animate-input  fa fa-search"  type="text" style="width:60%" > <i class="fa fa-search"></i>
    </a>
  </div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      <h4>งาน Event กันตนา</h4>
      <br>

       <input name="btnSubmit" type="button" onclick="window.location='photo from event.php'" type="submit"  value="Select">
        </div>

    <div class="w3-col m3">
      <img src="2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Market">
      <h4>งาน Event Embassy</h4>
        <br>

       <input name="btnSubmit" type="button" onclick="window.location='output.php'" type="submit"  value="Select">
    </div>

    <div class="w3-col m3">
      <img src="3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Event">
      <h4>งาน Event Little Japan</h4>
      <br>

       <input name="btnSubmit" type="button" onclick="window.location=''" type="submit"  value="Select">
    </div>

    <div class="w3-col m3">
      <img src="44.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Event">
      <h4>งาน Event Art Box</h4>
      <br>
      <input name="btnSubmit" type="button" onclick="window.location='output.php'" type="submit"  value="Select">
    </div>



  </div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-medium w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-30">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<!-- Third Parallax Image with Portfolio Text -->

</div>
</body>
</html>
