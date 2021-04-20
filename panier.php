<?php
session_start();
require_once("config_db.php");
//php delete button 
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $rem = "delete from panier where id =$id";
    mysqli_query($conn,$rem);
    //to return to the current web page
    header("location: panier.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th width="15%">Product Name</th>
      <th width="20%">Product Image</th>
      <th width="10%">Quantity</th>
      <th width="10%">Price</th>
      <th width="10%">Total</th>
      <th width="10%">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $total =0 ;
  $req = "select * from panier";
  $result = mysqli_query($conn,$req);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
  ?>
  <tr>
      <th scope="row"><?php echo $row["name"]?></th>
      <td><img src="<?php echo $row["image"];?>" style="max-height:100%; max-width:100%"/> </td>

      <td><?php echo $row["quantite"]?></td>
      <td><?php echo $row["price"]?></td>
      <td> <?php echo number_format($row["price"] * $row["quantite"],2) ;?> </td>
      <td><a href="panier.php?delete=<?php echo $row["id"];?>" class="btn btn-danger">delete</a></td>
    </tr>
  <?php
    $total += ($row["price"] * $row["quantite"]);
    }
    ?>
    <tr>
    <td colspan="4" align="right">Total</td>
    <td align ="right">$ <?php echo number_format($total,2);?></td>
    </tr>
    <?php
    }
    else echo "0 results";
  ?>
  </tbody>
  </table>
</div>
</body>
</html>