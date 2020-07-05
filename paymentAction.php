<?php
include("admin/include/db.php");
session_start();

if(isset($_POST['submit'])){
 

   // $_SESSION['fname'] = $_POST['fname'];
   // $_SESSION['lname'] = $_POST['lname'];
   // $_SESSION['phone'] = $_POST['phone'];
	 $address  = $_POST['address'];
	 $city     = $_POST['city'];
	 $state    = $_POST['state'];
   $goods    = $_SESSION['cart'];
   $carts = implode(",", $goods );
   

	   if(!empty($address)&&!empty($city)
	    &&!empty($state)&&!empty($carts)){
 

        $sql = "INSERT INTO shipping_details(firstName,lastName,
                                           phone,address,city,
                                           state,goods,time)";

          $sql .= "VALUES('".mysqli_real_escape_string($connection, $_SESSION['fname'])."',
                       '".mysqli_real_escape_string($connection, $_SESSION['lname'])."',
                       '".mysqli_real_escape_string($connection, $_SESSION['phone'])."',
                       '".mysqli_real_escape_string($connection,$address)."',
                       '".mysqli_real_escape_string($connection,$city)."',
                       '".mysqli_real_escape_string($connection,$state)."',
                       '".mysqli_real_escape_string($connection,$carts)."',
                          now())";
                          
                        $result = mysqli_query($connection,$sql);
                          if(!$result){
                          echo mysqli_error($connection);exit;
                        }else{
                                                   
                           // $_SESSION['alert'] = '<div class="alert alert-success">Thank you for shopping with us</div>';
                            header("Location:deliveryMethod.php");
                         }	        	
	                     }
                      }
                
              ?>

             