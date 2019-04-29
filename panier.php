<?php
include('account/includes/dbhandler.inc.php'); 
$r = mysqli_query($connection, "SELECT * FROM panier");
  if (!$r) {
  printf("Error: %s\n", mysqli_error($connection));
  exit();
  }
  while ($row = mysqli_fetch_array($r)) {
echo"<div class='single-cart-item'>";
    echo"<a href='#' class='product-image'>";
                        echo"<img src='".$row['img1']."' class='cart-thumb'>";
                        echo"<div class='cart-item-desc'>";
                        echo" <span class='product-remove'><i class='fa fa-close' aria-hidden='true'></i></span>";
                        echo" <span class='badge'>Mango</span>";
                        echo" <h6>'".$row['nom']."'</h6>";
                        echo" <p class='size'>Size: S</p>";
                        echo" <p class='color'>Color: Red</p>";
                        echo" <p class='price'>'$".$row['prix']."'</p>";
                        echo" </div>";
                        echo" </a>";
                        echo"</div>";

                          }                        
                          $connection->close();
?>