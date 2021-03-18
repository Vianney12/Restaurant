<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Our products</a>
  <a href="#" class="w3-bar-item w3-button">Pricing</a>
  <a href="#" class="w3-bar-item w3-button">Our services</a>
  <a href="#" class="w3-bar-item w3-button">About us</a>
</div>

<!-- Page Content -->
<div class="w3-black">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>My Restaurant</h1>
  </div>
</div>

<!--<img src="img_car.jpg" alt="Car" style="width:100%"> -->

<div class="w3-container">

</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 
