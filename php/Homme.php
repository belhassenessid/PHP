<?php
session_start();
require("config_db.php");

if(isset($_POST["add_to_cart"]))
{
    if(!isset($_SESSION['username'])){
    header('location:login.php');
}

function function_alert($message) {

  // Display the alert box 
  echo "<script>alert('$message');</script>";
}
    $id=$_POST['item_id'];
    //verification de produit ajouté
    $check = "select * from panier where id = $id";
    $rescheck = mysqli_query($conn,$check);
    if(mysqli_num_rows($rescheck)==0){
        $name=$_POST['item_name'];
        $quant=$_POST['item_quantity'];
        $price=$_POST['item_price'];
        $image=$_POST['item_image'];

        $sql = "INSERT INTO panier (id,name,image,price,quantite)
        VALUES ('$id','$name','$image','$price','$quant')";
        if (mysqli_query($conn, $sql)) {
          header("Location: Homme.php?Message= Item added sucessfully" . urlencode($Message));
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
    } else {
      header("location:Homme.php?Message1= Item already added" . urlencode($Message1));
    }
     mysqli_close($conn);
   // header("location: Homme.php");
}
if (isset($_GET['Message'])) {
  print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
if (isset($_GET['Message1'])) {
  print '<script type="text/javascript">alert("' . $_GET['Message1'] . '");</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="../style/Homme.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../style/all.min.css">
<!-- -->
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
<script>
// When the user clicks on <div>, open the popup
function myFunction2() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</head>
<body>
<header>
    <a href="#" class="logo"><i id="logo" class="fas fa-shopping-basket"></a></i>
    <p id="titre"><span class="title">Skouza</span> Store</p>
    <nav>
            <ul class="navbar-links">
    <li class="nav-item"><a id="na" href="index.php">Home</a></li>
    <li class="nav-item"><a id="na" href="shop.php">Shop</a></li>
    <li class="nav-item"><a id="na"  href="#">About</a></li>
    <li class="nav-item"><button onclick="myFunction2()" class="dropbtn" type="button" name="button">My Account</button></li>
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

 </br></br></br>
<!--affichage des produits -->
<div class="small-container">
  <hr id="top">
    <h2 class="title1">Men Products</h2>
    <hr id="bottom">
<div class="row">
  <?php
  $req = "select * from product where gender='h' order by id asc";
  $res= mysqli_query($conn,$req);
  if(mysqli_num_rows($res)>0){
      while($row=mysqli_fetch_assoc($res)){
  ?>
  <div class="col-4">
            <form method="POST" action="Homme.php">
                    <div>
                      <div class="div1">
                        <img src="<?php echo $row["image"];?>" class="img-prod" /><br/>
                        <h4 class="prod-name"><?php echo $row["name"];?></h4>
                        <h4 class="prod-price"><?php echo "$".$row["price"];?></h4>
                        </div>
                        <input type="number" max="30" min="1" step="1" name="item_quantity" class="prod-qn" value="1"/>
                        <input type="hidden" name="item_id" value="<?php echo $row["id"];?>"/></h4>
                        <input type="hidden" name="item_name" value="<?php echo $row["name"];?>"/></h4>
                        <input type="hidden" name="item_price" value="<?php echo $row["price"];?>"/>
                        <input type="hidden" name="item_image" value="<?php echo $row["image"];?>"/>
                        <div class="popup">
                        </br><button type="submit" id="add" class="btn-add" onclick="myFunction2()" name="add_to_cart">Add To Cart<i class="fas fa-shopping-cart"></i></button>
                           <span class="popuptext" id="myPopup">Item add to cart</span>
                        </div>
                    </div>
            </form>
            </div>

   <?php
     }
      }
    ?>
     </div>
</div>
    </div>
</div>
<footer>
  <div id="footer" class="footer-message">
      <p>Copyright &copy;2021 | All Rights Reserved.Designed by</p>
  </div>
</footer>
</body>
</html>
