<?php
include_once('admin/db.php');
session_start();

if(isset($_POST['submit'])){
 

	 $fname    = $_POST['fname'];
	 $lname    = $_POST['lname'];
	 $company  = $_POST['company'];
	 $email    = $_POST['email'];
	 $phone    = $_POST['phone'];
	 $country  = $_POST['country'];
	 $address  = $_POST['address'];
	 $city     = $_POST['city'];
	 $state    = $_POST['state'];
	 $postcode = $_POST['postcode'];
	 $password = $_POST['pass'];
	 $cpass    = $_POST['cpass'];
	 $notes    = $_POST['notes'];
   $goods    = $_SESSION['cart'];
   $carts = implode(",", $goods );
   

	   if(!empty($fname)&&!empty($lname)
	    &&!empty($company)&&!empty($email)
	   	&&!empty($phone)&&!empty($country)
	  	&&!empty($address)&&!empty($city)
	    &&!empty($state)&&!empty($carts)&&!empty($postcode)
	    &&!empty($password)&&!empty($cpass)
      &&!empty($notes)){


	 	
     if($password != $cpass){
   
         $_SESSION['alert'] ='<div class="alert alert-danger">Password and confirm password must match.</div>';
         header("Location:payment.php");exit;
      }else{
        $password_hash = md5($password);   

        $sql = "INSERT INTO shipping_details(firstName,lastName,
                                           company,email,phone,
                                           country,address,city,
                                           state,goods,postcode,password,
                                           order_notes,time)";

          $sql .= "VALUES('".mysqli_real_escape_string($connection,$fname)."',
                       '".mysqli_real_escape_string($connection,$lname)."',
                       '".mysqli_real_escape_string($connection,$company)."',
                       '".mysqli_real_escape_string($connection,$phone)."',
                       '".mysqli_real_escape_string($connection,$address)."',
                       '".mysqli_real_escape_string($connection,$city)."',
                       '".mysqli_real_escape_string($connection,$state)."',
                       '".mysqli_real_escape_string($connection,$carts)."',
                          now())";
                          
                        $result = mysqli_query($connection,$sql);
                          if(!$result){
                          echo mysqli_error($connection);exit;
                        }else{
                             $key = array_search($id, $_SESSION['cart']);
                             if(($key = array_search($id, $_SESSION['cart'])) !==false) {
                                  unset($_SESSION['cart'][$key]);
                              }
                              $_SESSION["cart"] = array_values($key);
                              unset($_SESSION['cart'][$key]);

                                                         
                           $_SESSION['alert'] = '<div class="alert alert-success">Thank you for shopping with us</div>';
                            header("Location:cart.php");
                         }	        	
	                     }
                      }
                  }
              ?>

             