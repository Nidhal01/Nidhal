<?php
include('account/includes/dbhandler.inc.php'); 
if (isset($_GET['shirt'])) {
  $r = mysqli_query($connection, "SELECT * FROM woman where categorie ='T-shirt' ");
  if (!$r) {
  printf("Error: %s\n", mysqli_error($connection));
  exit();
  }
}
while ($row = mysqli_fetch_array($r)) {
    echo"<div class='col-12 col-sm-6 col-lg-4'>";
    echo" <form method='GET' action='panier.php'>";
        echo"<div class='single-product-wrapper'>";
//<!-- Product Image -->
echo"<div class='product-img'>";
echo"<img src='".$row['img1']."' name='img1'>";
//<!-- Hover Thumb -->
echo "<img class='hover-img' src='".$row['img2']."' name='img2'>";
echo"</div>";

//<!-- Product Description -->
echo"<div class='product-description'>";
echo"<span>'".$row['brand']."'</span>";
echo"<a href='single-product-details.php'>";
 echo"<h6 name='nom'>'".$row['name']."'</h6>";
echo"</a>";
echo"<p name ='prix' class='product-price'> '".$row['prix']."'</p>";
//<!-- Hover Content -->
echo"<div class='hover-content'>";
    //<!-- Add to Cart -->
    echo"<div class='add-to-cart-btn'>";
    echo" <a href='#?add=true' class='btn essence-btn'>Add to Cart</a>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
echo"</form>";
echo"</div>";               
}
?>