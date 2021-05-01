<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylelogin.css">
    <link rel="stylesheet" href="../style/all.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <header>

    <i id="logo" class="fas fa-shopping-basket"></i>
  <a href="index.php" class="title-a"><p id="titre"><span class="title">Skouza</span> Store</p></a>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
            <ul class="navbar-links">
    <li class="nav-item"><a id="na" href="index.php">Home</a></li>
    <li class="nav-item"><a id="na" href="#">Shop</a></li>
    <li class="nav-item"><a id="na"  href="#">About</a></li>

              </ul>
                 </nav>
  <div class="navbar-icons">
  <a id="na" class="icon" href="#"><i class="fa fa-fw fa-search"></i></a>
  <a id="na" class="icon" href="#"><i class="fas fa-shopping-cart"></i></a>
  <a id="na" class="icon" href="#"><i class="fas fa-heart"></i></a>
    </div>
  </header>
  <div class="container" id="container">
  <div class="form-container sign-up-container">
  <form action="addUser.php" method="POST">
  	<h1>Create Account</h1>
  	<div class="social-container">
  		<a href="#" class="social"><i class="fab fa-facebook"></i></a>
  		<a href="#" class="social"><i class="fab fa-google"></i></a>
  		<a href="#" class="social"><i class="fab fa-linkedin"></i></a>
  	</div>
  	<span>Create your account here.</span>
  	<input type="text" name="user" placeholder="Username">
  	<input type="password" name="password" placeholder="Password">
  	<button>SignUp</button>
  </form>
  </div>
  <div class="form-container sign-in-container">
  	<form action="authentification.php" method="POST">
  		<h1>Sign In</h1>
  		<div class="social-container">
  		<a href="#" class="social"><i class="fab fa-facebook"></i></a>
  		<a href="#" class="social"><i class="fab fa-google"></i></a>
  	</div>
  	<span>Enter your informations.</span>
  	<input type="text" name="user" placeholder="Username">
  	<input type="password" name="password" placeholder="Password">
  	<a href="#">Forgot Your Password</a>

  	<button>Sign In</button>
  	</form>
  </div>
  <div class="overlay-container">
  	<div class="overlay">
  		<div class="overlay-panel overlay-left">
  			<h1>Welcome Again!</h1>
  			<p>To keep connected with us please login with your personal info</p>
  			<button class="ghost" id="signIn">Sign In</button>
  		</div>
  		<div class="overlay-panel overlay-right">
  			<h1>Welcome!</h1>
  			<p>Sign up and discover our great products</p>
  			<button class="ghost" id="signUp">Sign Up</button>
  		</div>
  	</div>
  </div>
  </div>
  </div>

<script type="text/javascript">
  	const signUpButton = document.getElementById('signUp');
  	const signInButton = document.getElementById('signIn');
  	const container = document.getElementById('container');

  	signUpButton.addEventListener('click', () => {
  		container.classList.add("right-panel-active");
  	});
  	signInButton.addEventListener('click', () => {
  		container.classList.remove("right-panel-active");
  	});
  </script>
  <footer>
    <div id="footer" class="footer-message">
        <p>Copyright &copy;2021 | All Rights Reserved.Designed by</p>
    </div>
  </footer>

  </body>


</html>