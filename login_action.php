<?php

include("admin/db.php");

session_start();
ob_start();


if(isset($_POST['submit'])){

  // $email    = $_POST ['email'];
  // $password = md5($_POST ['password']);
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['pass'] = md5($_POST['pass']);

  $email = mysqli_real_escape_string($connection,$_SESSION['email']);
  $phone = mysqli_real_escape_string($connection,$_SESSION['phone']);
  $password = mysqli_real_escape_string($connection,$_SESSION['pass']);

  if(!empty($email )&&!empty($phone)&&!empty($password)){

   

   
   $query = "SELECT * FROM customers WHERE `email`= '{$email}' AND `phone`= '{$phone}' AND `password` ='{$password}'";

     $result = mysqli_query($connection, $query);
     if(!$result){

      die("Query Failed" . mysqli_error($connection));
     }

  
       $query_num_rows = mysqli_num_rows($result);
          if ($query_num_rows==0) {
  
          $_SESSION['alert'] ='<h4 style="text-align:center; background-color:#CA3433; color:#fff;padding:80px font-size:11px";>Invalid username or password combination, please log in your correct details!</h4>';
             header("Location:login.php");exit();
          }else if ($query_num_rows==1){
         
           // $user_id = mysqli_result($query, 0, 'id');
           $email = $_SESSION['email'] &&  $password = $_SESSION['password'];
              header("Location: payment.php");

     }else{
  

           header("Location: register.php");exit();
    
     }


  }

}


?>