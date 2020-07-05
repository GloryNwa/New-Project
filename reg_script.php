<?php

include("admin/include/db.php");
session_start();

if(isset($_POST['submit'])){

	   $_SESSION['fname'] = $_POST['fname'];
     $_SESSION['lname'] = $_POST['lname'];
     $_SESSION['phone'] = $_POST['phone'];
	   $_SESSION['email'] = $_POST['email'];	 
     $_SESSION['pass']  = $_POST['pass'];
     $cpass             = $_POST['cpass'];
     
     if(!empty($_SESSION['fname'])&&!empty($_SESSION['lname'])
	   &&!empty($_SESSION['email'])&&!empty($_SESSION['phone'])
     &&!empty( $_SESSION['pass'])&&!empty($cpass)){

        if($_SESSION['pass']!= $cpass){
    
         $_SESSION['alert'] ='<div class="alert alert-danger">Password and confirm password must match.</div>';
          header("Location:register.php");exit;
          
         }else{
         $password_hash = md5($_SESSION['pass']); 

            $qry =  "SELECT * FROM customers WHERE `email`= ".$_SESSION['lname']." AND `phone`= ".$_SESSION['phone']." AND `password`=".$_SESSION['pass']."";
    //         $result = mysqli_query($connection, $qry);
    //  if(!$result){

    //   die("Query Failed" . mysqli_error($connection));
    //  }
        
          $query_num_rows = mysqli_num_rows($qry);
          if ($query_num_rows ==1) {
            $_SESSION['alert'] ='<div class="alert alert-danger">Email has already been taken, please choose another email</div>';
            header("Location:register.php");exit;
          }else{

          
           
          $sql = "INSERT INTO customers(firstname,lastname,
                                           email,phone,
                                           password,
                                           time)";

           $sql .= "VALUES('".mysqli_real_escape_string($connection, $fname )."',
                       '".mysqli_real_escape_string($connection, $lname )."',
                       '".mysqli_real_escape_string($connection, $email ) ."',
                       '".mysqli_real_escape_string($connection, $phone )."',                      
                       '".mysqli_real_escape_string($connection, $password_hash)."',                      
                          now())";
                        
                          
          // }else if($query_num_rows ==1){
          //   $_SESSION['alert'] ='<h4 style="text-align:center; background-color:#CA3433; color:#fff;padding:80px font-size:11px";>Name already exist!</h4>';
          //   echo'hqqqqqqqqqqqqqqere';exit;   
          //   header("Location:register.php");exit();
               
          //    }else{
             $rest = mysqli_query($connection,$sql);
              if(!$rest){

               header('Location:register.php');exit;
             }else{                         
                  header("Location:payment.php");
                         }	        	
	                     }
                     }
                  }
                }
              
           
         ?>

             