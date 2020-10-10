<?php
session_start();

$curl = curl_init();
unset($_SESSION['cart']);    
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email= $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$desc = $_SESSION['description']; 
$amount =$_SESSION['total']* 100;
// var_dump($_SESSION['option']);exit;
  //the amount in kobo. This value is actually NGN 300
//   unset($_SESSION['fname']);
//   unset($_SESSION['lname']);
//   unset($_SESSION['email']);
//   unset($_SESSION['phone']);
//   unset($_SESSION['location']);
//  unset($_SESSION['option']);

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'email'=>$email,
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization:Bearer sk_test_31c6f8900378613beef8d7ff3946fe6bc0ad2de3", //replace this with your own test key
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if(!$tranx->status){
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
// print_r($tranx);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);


?>





