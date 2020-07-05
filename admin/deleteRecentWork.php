<?php

session_start();
ob_start();


if(!isset($_SESSION['password']) || $_SESSION['password'] != 'edeywork2020') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';
     //maybe redirect to login page

     die();
}
?>
 <?php include("include/header.php");?>
<?php
   $id  = $_GET['id'];
         $query = "DELETE FROM recentwork WHERE `id`='$id'";
                if ($query_run = mysqli_query($connection,$query)) {
                 $_SESSION['alert'] ='<div class="alert alert-success" style="text-align:center">Product deleted successfully.</div>';
                 header('Location:manageRecent.php');

      }


  ?>