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
    <link rel="stylesheet" type="text/css" href="../style/all.min.css">
    <link rel="stylesheet" href="../style/shop.css?v=<?php echo time(); ?>">
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
                <a href="Homme.php"></a>
            </article>
            <?php } }?>     
</div> 
</body>
</html>