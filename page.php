<?php
include('account/includes/dbhandler.inc.php'); 


                    if (isset($_GET['shirt'])) {
                      $r = mysqli_query($connection, "SELECT * FROM woman where categorie ='T-shirt' ");
                      if (!$r) {
                      printf("Error: %s\n", mysqli_error($connection));
                      exit();
                      }
                    }
                     elseif (isset($_GET['asos'])) {
                        $r = mysqli_query($connection, "SELECT * FROM woman where brand ='asos' ");
                        if (!$r) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                        }
                      }
                      elseif (isset($_GET['mango'])) {
                        $r = mysqli_query($connection, "SELECT * FROM woman where brand ='mango' ");
                        if (!$r) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                        }
                      }
                      elseif (isset($_GET['river'])) {
                        $r = mysqli_query($connection, "SELECT * FROM woman where brand ='river' ");
                        if (!$r) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                        }
                      }
                      elseif (isset($_GET['top'])) {
                        $r = mysqli_query($connection, "SELECT * FROM woman where brand ='Topshop' ");
                        if (!$r) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                        }
                      }
                      elseif (isset($_GET['zara'])) {
                        $r = mysqli_query($connection, "SELECT * FROM woman where brand ='zara' ");
                        if (!$r) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                        }
                      }

                     else{
                                $r = mysqli_query($connection, "SELECT * FROM woman");
                                if (!$r) {
                                  printf("Error: %s\n", mysqli_error($connection));
                                  exit();
                                }
                            }
                            while ($row = mysqli_fetch_array($r)) {
                                echo"<div class='col-12 col-sm-6 col-lg-4'>";
                                echo" <form method='POST'>";
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
                                if (isset($_SESSION['id'])){
                                  echo"<div class='add-to-cart-btn'>";
                                  echo" <input type='submit'name='ad' class='btn essence-btn' value='ADD to Carte '>";
                                  echo"</div>";
                                }else{
                                echo"<div class='add-to-cart-btn'>";
                                echo" <a href='#?add=true' class='btn essence-btn'>Buy Now</a>";
                                echo"</div>";
                                }
                                echo"</div>";
                                echo"</div>";
                                echo"</div>";
                    echo"</form>";
                        echo"</div>";               
                      }
              if(isset($_POST['ad']))
              {
                $nom =$_POST['nom'];
                $img = $_POST['img1'];
                $prix = $_POST['prix']; 
            $sql = "INSERT INTO panier (nom,img1, prix) VALUES ('$nom','$img', '$prix')";
            if ($connection->query($sql) === TRUE) {
              echo "hi";
            }
            else {
                echo "Error: " . $sql . "$connection->error";
            }
              }
?>