<?php
  if (isset($_POST['submit'])) {

    require 'account/includes/dbhandler.inc.php';

    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $add=$_POST['add'];
    $code=$_POST['code'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sql = "INSERT INTO checkout (FIRST_NAME, LAST_NAME,COUNTRY,ADDRESS,POSTCODE,CITY,PHONE,EMAIL)VALUES ('$firstName', '$lastName','$country','$add','$code','$city','$phone','$email')";
     if ($connection->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql ." $connection->error";
    }
}else{
  echo "email no valide";
}
  }
 ?>