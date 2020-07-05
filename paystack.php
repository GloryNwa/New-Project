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







<!-- // <form>
//   <script src="https://js.paystack.co/v1/inline.js"></script>
//   <button type="button" onclick="payWithPaystack()"> Pay </button> 
// </form> -->
 
 <script>
//   function payWithPaystack(){
//     var handler = PaystackPop.setup({
//       key: 'sk_test_6ae72de75868f78bb2a7d19b2360acdf7ff9d3fb',
//       email: 'glorynwa@gmail.com',
//       amount: 10000,
//       currency: "NGN",
//       ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
//       metadata: {
//          custom_fields: [
//             {
//                 display_name: "Mobile Number",
//                 variable_name: "mobile_number",
//                 value: "+2348012345678"
//             }
//          ]
//       },
//       callback: function(response){
//           alert('success. transaction ref is ' + response.reference);
//       },
//       onClose: function(){
//           alert('window closed');
//       }
//     });
//     handler.openIframe();
//   }
// </script> 


