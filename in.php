<?php
include('account/includes/dbhandler.inc.php'); 
                    if (isset($_GET['com'])) {
                      $r = mysqli_query($connection, "SELECT * FROM checkout ");
                      if (!$r) {
                      printf("Error: %s\n", mysqli_error($connection));
                      exit();
                      }
                      echo"<DIV ALIGN='CENTER'><h2>Les Commandes</h2></DIV>";
                        echo"<table style='width:100%'>";
                        echo"<tr>";
                        echo"<th>Name</th>";
                        echo"<th>Adress</th>";
                        echo"<th>PostCode</th>";
                        echo"<th>City</th>";
                        echo"<th>Etat</th>";
                        echo"</tr>";
                        while ($row = mysqli_fetch_array($r)) {
                            echo"<tr>";
                           echo"<td> '".$row['FIRST_NAME']."'</td>";
                           echo"<td> '".$row['ADDRESS']."'</td>";  
                           echo"<td> '".$row['POSTCODE']."'</td>";  
                           echo"<td> '".$row['CITY']."'</td>";  
                           echo"<td ALIGN='center'>
                           <select>        
                                <option >Delivere</option>
                                <option>non Delivere</option>
                           </select> </td>";  
                           echo"</tr>";            
                }
                echo"</table>";
                echo"<input type='submit' value='Save'>";
                    }
                     elseif (isset($_GET['aj'])) {
                        echo"<div id='login_div'>";
                        echo"<form id='login_form' action='account\includes\sign.inc.php' method='post'>";
                          echo"<div id='d1'>";
                        echo"<span>Ajouter Produits</span>";
                         echo" </div>";
                          echo"<input type='text' name='id' placeholder='id' pattern='[0-9]'>";
                         echo" <input type='text' name='name' placeholder='name' required pattern='[A-Z a-z]' title='only letter' maxlength='15'>";
                         echo" <input type='text' name='brand' placeholder='brand' required pattern='[A-Z a-z]' title='only letter ' maxlength='15'>";
                         echo" <input type='text' name='Categorie' placeholder='Categorie' required pattern='[A-Z a-z]' title='only letter ' maxlength='15'>";
                         echo" <input type='text' name='Prix' placeholder='Prix' pattern='[0-9]'>";
                         echo" <input type='hidden' name='size' value='1000000'>";
                          echo"<div>";
                          echo"<input type='file' name='image'>";
                          echo"</div>";
                           echo" <button type='submit' name='submit'>Sign in</button>";
                        echo"</form>";
                      echo"</div>";
                      }
                      elseif (isset($_GET['con'])) {
                        $r = mysqli_query($connection, "SELECT * FROM contact  ");
                        if (!$r) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                        }
                        echo"<DIV ALIGN='CENTER'><h2>Les Contacts</h2></DIV>";
                        echo"<table style='width:100%'>";
                        echo"<tr>";
                        echo"<th>Name</th>";
                        echo"<th>Message</th>";
                        echo"</tr>";
                        while ($row = mysqli_fetch_array($r)) {
                            echo"<tr>";
                           echo"<td> '".$row['name']."'</td>";
                           echo"<td> '".$row['message']."'</td>";  
                            echo"</tr>";            
                }
                echo"</table>"; 
                      }
?>