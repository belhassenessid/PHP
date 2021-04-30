<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/all.min.css">
    <script type="text/javascript">
 function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
var dropdowns = document.getElementsByClassName("dropdown-content");
var i;
for (i = 0; i < dropdowns.length; i++) {
var openDropdown = dropdowns[i];
if (openDropdown.classList.contains('show')) {
  openDropdown.classList.remove('show');
}
}
}
}
</script>
    <title></title>
  </head>
  <body>

    <header>
    <a href="#" class="logo"><i id="logo" class="fas fa-shopping-basket"></a></i>
    <p id="titre"><span class="title">Skouza</span> Store</p>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
            <ul class="navbar-links">
    <li class="nav-item"><a id="na" href="index.php">Home</a></li>
    <li class="nav-item"><a id="na" href="shop.php">Shop</a></li>
    <li class="nav-item"><a id="na"  href="#">About</a></li>
    <li class="nav-item"><button onclick="myFunction()" class="dropbtn" type="button" name="button">My Account</button></li>
    <div id="myDropdown" class="dropdown-content">
      <a href="login.php">Log in</a>
      <a href="login.php">Sign Up</a>
    </div>
              </ul>
                 </nav>
  <div class="navbar-icons">
  <a id="na" class="icon" href="#"><i class="fa fa-fw fa-search"></i></a>
  <a id="na" class="icon" href="#"><i class="fas fa-shopping-cart"></i></a>
  <a id="na" class="icon" href="#"><i class="fas fa-heart"></i></a>
    </div>
</header>
<div class="mid">

<div class="Container">
  <div class="news">
    <h1>Collection<br>New Arrivals</h1>
    <p id="collection" class="collection">New Collection are in check out!</p>
    <a  href="shop.php" class="btn">Explore Now</a>
  </div>
  <div class="new-img">
    <img src="../images/testHome3.png" alt="" class="img-col">
  </div>
</div>
<hr>
<h3>Our Products</h3>
<div class="cards-container">
  <div class="card">
    <div class="face face1">
      <div class="content">
     <i id="card-i-women" class="fas fa-female"></i>
     <h3 id="card-h3">Women</h3>
      </div>
    </div>
    <div class="face face2">
      <p>View all Women's Collection</p>
      <a id="cards" href="#">View all</a>
    </div>
  </div>
  <div class="card">
    <div class="face face1">
      <div class="content">
      <i id="card-i-men" class="fas fa-male"></i>
     <h3 id="card-h3">Men</h3>
    </div>
    </div>
    <div class="face face2">
      <p >View all Men's Collection</p>
      <a id="cards" href="#">View all</a>
    </div>
  </div>
  <div class="card">
    <div class="face face1">
      <div class="content">
        <i id="card-i-kids" class="fas fa-child"></i>
     <h3 id="card-h3">Kids</h3>
    </div>
    </div>
    <div class="face face2">
      <p >View all kid's Collection</p>
      <a id="cards" href="#">View all</a>
    </div>
  </div>
</div>
<hr>
<h3>Get In Touch</h3>
<div class="contact-wrap">
  <div class="contact-in">
    <h1>Contact Info</h1>
    <h2><i class="fas fa-phone"></i>Phone</h2>
    <p>123-456-789</p>
    <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
    <p>info@democompany.com</p>
    <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
    <p>El mourouj 1, Tunis, Tunisia</p>
    <ul>
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-google"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div>
  <div class="contact-in">
    <h1>Send a Message</h1>
    <form>
      <input type="text" placeholder="Full Name" class="contact-in-input">
      <input type="text" placeholder="Email" class="contact-in-input">
      <input type="text" placeholder="Subject" class="contact-in-input">
      <textarea placeholder="Message" class="contact-in-textarea"></textarea>
      <input type="submit" value="SUBMIT" class="contact-in-btn">
    </form>
  </div>
  <div class="contact-in">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25583.253737440307!2d10.19966553249045!3d36.72480151139491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd3706a8626633%3A0xf009d6f9d18128b8!2sEl%20Mourouj!5e0!3m2!1sen!2stn!4v1618843102553!5m2!1sen!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</div>
<footer>

  <div id="footer" class="footer-message">
      <p>Copyright &copy;2021 | All Rights Reserved.Designed by</p>
  </div>
</footer>

</div>

  </body>
</html>
