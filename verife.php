<?php session_start() ;
    if(isset($_SESSION['id'])) {
        header("location: checkout.php");
    }else{
        header("location: index.php");
    }
?>