?php

<?php session_start();
ob_start();



?>
 <?php include("include/header.php");?>
<?php
   $id  = $_GET['id'];
         $query = "DELETE FROM clients WHERE `id`='$id'";
                if ($query_run = mysqli_query($connection,$query)) {
                 $_SESSION['alert'] ='<div class="alert alert-success">Product deleted successfully.</div>';
                 header('Location:client.php');

      }


  ?>