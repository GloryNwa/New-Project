<?php


 include("includes/header.php");
 
$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_31c6f8900378613beef8d7ff3946fe6bc0ad2de3",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
	// there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
  //  echo '<h5 style="text-align:center;color:green; margin-top:50px;">Transaction successful. 
  //  Thank you for doing bussiness with us! <br><br><br><br><img src="img/tenorr.gif"></h5>';
   
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  $sql = "INSERT INTO customers(firstname,lastname,email,phone,address,city,state,goods, total,time)";

$sql .="VALUES('".mysqli_real_escape_string($connection,$_SESSION['fname'])."','".mysqli_real_escape_string($connection,$_SESSION['lname'])."','".mysqli_real_escape_string($connection,$_SESSION['email']) . " ' ,
' ".mysqli_real_escape_string($connection,$_SESSION['phone'] ) ."',                      
'".mysqli_real_escape_string($connection,$_SESSION['address'])."', 
'".mysqli_real_escape_string($connection,$_SESSION['city'])."',   
'".mysqli_real_escape_string($connection,$_SESSION['state'])."', 
'".mysqli_real_escape_string($connection,$_SESSION['description'])."', 
'".mysqli_real_escape_string($connection,$_SESSION['total'])."',                   
now())";

$rest = mysqli_query($connection,$sql);
if(!$rest){

 echo ('Query failed'.mysqli_error($connection));exit;
}else{  
                         
  echo '<h5 style="text-align:center;color:green; margin-top:50px;">Transaction successful. Thank you for doing bussiness with us! <br><br><br><br><img src="images/tenor.gif"></h5>';

  // unset($_SESSION['cart']);
  unset($_SESSION['fname']);
  unset($_SESSION['lname']);
  unset($_SESSION['email']);
  unset($_SESSION['phone']);
  unset($_SESSION['address']);
  unset($_SESSION['city']);
  unset($_SESSION['state']);
  unset($_SESSION['goods']);
  unset($_SESSION['total']);
  unset($_SESSION['time']);  


           }	
           
         
  
}

// echo $_POST['fname'];
 

 ?>

     
      <div class="container">
      
           
      
      </div><br><br>

     <?php  include("includes/footer.php");?>
