<?php
include('account/includes/dbhandler.inc.php'); 
$output ="";
if(isset($_POST['search'])) {
  $search = $_POST['search'];
  $search = preg_replace("#[^0-9a-z]i#","", $search);

  $r = mysqli_query($connection,"SELECT  `name`, `brand`, `categorie` FROM `woman` WHERE name  LIKE '%$search%'") or die ("Could not search");
  $count = mysqli_num_rows($r);
  
  if($count == 0){
    $output = "There was no search results!";
    echo $output;
  }
else{

    while ($row = mysqli_fetch_array($r)) {

      $nom = $row ['name'];
    

      $output .='<div> '.$nom.'</div>';

    }

  }
}
    print $output;
?>