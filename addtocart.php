<?php  
session_start();

if(isset($_SESSION['cart'])&& isset($_SESSION['qty']) &&count($_SESSION['cart'])> 0  &&count($_SESSION['qty'])> 0){
  
    $carts = $_SESSION['cart'];
    $qty = $_SESSION['qty'];
    
 
}else{

$carts = array();

}

array_push($carts,$qty, $_GET['id']);

$_SESSION['cart'] = $carts;
$_SESSION['qty'] = $qty;
// var_dump($_SESSION['qty'] = $qty);exit;
// $_SESSION['msg'] ='<div class="alert alert-success"></div>';
   header('Location:cart.php');


?>
