<?php include("includes/header.php");


ob_start();

if(isset($_POST["submit"])){

  $name = $_POST["name"];
  $email = $_POST['email'];
  $phone = $_POST["phone"];
  $message = $_POST['message'];

  if(!empty($name)&&!empty($email)&&!empty($phone)&&!empty($message)){

    $sql = "INSERT INTO contact( name, email, phone, message, time)";
    $sql .= "VALUES(  
         '".mysqli_real_escape_string($connection,$name)."',
         '".mysqli_real_escape_string($connection,$email)."', 
         '".mysqli_real_escape_string($connection,$phone)."',  
         '".mysqli_real_escape_string($connection,$message)."',
         now()
         )";

       $result = mysqli_query($connection, $sql);
       if(!$result){
          // $_SESSION['alert'] ='<div style="background-color:#dc3545; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px">Your message could not be submitted at this time, please try again!</div>';exit;
        echo (mysqli_error($connection));exit;

       }else{
          $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px;height:50px">Thank you for contacting us, we will get back to you shortly!</div>';
                   
       }
  }
}

?>
<!-- content -->
<section id="content">
  <div class="bg-top">
    <div class="bg-top-2">
      <div class="bg">
        <div class="bg-top-shadow">
          <div class="main">
            <div class="box">
              <div class="padding">
                <div class="container_12">
                  <div class="wrapper">
                    <div class="grid_12">
                      <div class="indent-left">
                        <h3 class="p2">Contact Us</h3>
                        <?php if(isset($_SESSION['alert'])){ 
                                echo $_SESSION['alert'];
                                unset($_SESSION['alert']);
                               }

                         ?><br>
                        <form id="contact-form" action="" method="POST">
                          <fieldset>
                            <label><span class="text-form">Name:</span>
                              <input name="name" type="text" required="">
                            </label>
                            <label><span class="text-form">Email:</span>
                              <input name="email" type="email" required="true">
                            </label>
                            <label><span class="text-form">Phone:</span>
                              <input name="phone" type="text" required="true">
                            </label>
                            <div class="wrapper">
                              <div class="text-form">Message:</div>
                              <textarea name="message" required="required"></textarea>
                            </div>
                            <p></p>
                            <button class="button" name="submit" style="border:none; margin-left:80px">Contact Us</button>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-bot">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
         <article class="grid_4">
            <h3 class="prev-indent-bot2">Information</h3>
            <ul class="list-2">
              <li><a href="about.php">About Us</a></li>
              <li><a href="delivery.php">Delivery Information</a></li>
              <li><a href="#">Our Show Rooms</a></li>
              <li><a href="info.php">About Our Furniture</a></li>
              <li><a href="catalogue.php">Project Archive</a></li>
               <li><a href="category.php">Products Category</a></li>
            <!--    <li><a href="pricing.php">Our Pricing</a></li> -->
              <li class="last-item"><a href="privacy.php">Privacy Policy</a></li>
               <li><a href="terms.php">Terms & Conditions</a></li>
            </ul>
          </article>
          <article class="grid_4">
            <h3 class="prev-indent-bot2">Service List</h3>
            <ul class="list-2">
              <li><a href="">Furniture & Fixtures</a></li>
              <li><a href="#">WallPapper, WallPanel + Installation etc.</a></li>
              <li><a href="#">Painting, Screeding, POP Ceiling</a></li>
              <li><a href="#">Interior Advisory</a></li>
              <li><a href="#">Lightings</a></li>
               <li><a href="#">Space Management</a></li>
              <li class="last-item"><a href="#">Blinds, Curtains & Bedding</a></li>
               <li><a href="#">Motors Interior/ Accessories</a></li>
            </ul>
          </article>

          <article class="grid_4">
            <h3 class="prev-indent-bot">Contact Information</h3>
            <b>Open Hour:</b>
            <time class="tdate-1" datetime="2011-08-15"><a class="link" href="#">8:am-10:pm Mon-Sat</a></time>
            <p class="prev-indent-bot"><b>Show room Address:</b><br> 120, Airport Road, opposite FCMB Warri, Delta State</p>
            <!-- <time class="tdate-1" datetime="2011-08-11"><a class="link" href="#">8:am-10:pm Mon-Sat</a></time> -->
            <b>Lagos Address:</b><br>
            8, Flobora Close, Back of Chivita Company Ajao Estate, Lagos <br>

           <b> Phone No:</b><br> 08032894147, 07052749021<br>
           <b>Email:</b><br>frontlineinteriors@gmail.com<br>info@frontlineinteriors.com
          
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->


<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_4"  style="font-size:11px !important">
          <div>Copyright &copy; <a href="#">FrontLine Interiors</a> - All Rights Reserved</div>
          <div>Design, Developed & Programmed by <a target="_blank" href="">Brilliantdevelopers.net</a></div>
          <!-- {%FOOTER_LINK} -->
        </div>
        <div class="grid_4"> <span class="phone-numb"><span></span>08032894147<br>07052749021</span> </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
