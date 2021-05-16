<?php
   require_once('config_db.php');
   $sql = "select * from product";
   $query = mysqli_query($conn,$sql);
   if(!$query){
        echo 'error'.mysqli_error($conn);
   }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="E-commerce website">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link href="../style/shop.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../style/all.min.css">
    <link rel="stylesheet" href="../style/shop.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

    		    $(".fa-search").click(function() {
    		       $(".search-box").toggle();
    		       $("input[type='text']").focus();
    		     });

     		});
    </script>
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
</head>
<body>

<header >
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
  <div class="search-box">
     <input type="text" placeholder=""/>
     <input type="button" value="Search"/>
     </div>
  <a id="na" class="icon" href="panier.php"><i class="fas fa-shopping-cart"></i></a>
  <a id="na" class="icon" href="#"><i class="fas fa-heart"></i></a>
    </div>
</header>
<div class="products-container">
           <?php if(mysqli_num_rows($query)>0){
            while($row = mysqli_fetch_assoc($query)){?>
            <article class="product">
                <figure>
                    <img src="<?=$row['image']; ?>" alt="product">
                    <figcaption>
                        <span class="label"><?= $row['name']; ?></span>
                    </figcaption>
                </figure>
                <button data-product="climate" name="add_to_cart">view product</button>
                 <a href="<?php if($row['gender']=='f') echo "Femme.php"; elseif($row['gender']=='h') echo "Homme.php";elseif($row['gender']=='e') echo "enfant.php";?>"></a> 
                 
            </article>
            <?php } }?>
</div>
</body>
</html>
