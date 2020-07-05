<?php
  session_start();
//   include_once('admin/db.php');
     
           if (isset($_GET['id'])) {

             $id  = $_GET['id'];
             
          

             $key = array_search($id, $_SESSION['cart']);
             unset($_SESSION['cart'][$key],$_SESSION['qty']);
            //  unset($_SESSION['qty'],$id);

               $_SESSION['alert'] ='<div class="alert alert-success">Product Was Successfully Removed From the Cart.</div>';
                
              // header('Location: cart.php');   
              header('Location: ' . $_SESSION['referrer']);   
         
       }
     ?>
       
      

        