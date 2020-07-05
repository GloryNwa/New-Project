<?php

ob_start();

if(isset($_SERVER['HTTP_REFERER'])){
     $_SESSION['referrer']  = $_SERVER['HTTP_REFERER'];


  }
   
?>
 <?php include("include/header.php");?>
<?php
   $id  = $_GET['id'];
         $query = "DELETE FROM shipping_details WHERE `id`='$id'";
                if ($query_run = mysqli_query($connection,$query)) {
                 $_SESSION['alert'] ='<div class="alert alert-success">Product deleted successfully.</div>';
                 header('Location: ' . $_SESSION['referrer']); 

      }


  ?>