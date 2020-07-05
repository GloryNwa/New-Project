<?php  ob_start();
 include("includes/nav.php");


if(isset($_SESSION['cart']) && count($_SESSION['cart']) == 0){

header('Location:cart.php');

}

?>



 
    <!-- End Navigation -->
    <!--search-slideup-->
    <div class="search-slideup pr">
        <div class="container">
            <div class="row border-bottom-deep">
                <div class="col-md-3 p-0">
                    <select class="form-control border-none">
                        <option>All Categories</option>
                        <option>Product</option>
                        <option>Product</option>
                        <option>Product</option>
                        <option>Product</option>
                        <option>Product</option>
                        <option>Product</option>
                        <option>Product</option>
                        <option>Product</option>
                        <option>Product</option>
                    </select>
                </div>
                <div class="col-md-9 p-0">
                    <!--<div class="custom-input-box search-btn">-->
                    <!--<input class="form-control border-bottom input-box" placeholder="Seach enter store here...." type="text">-->
                    <!--<button class="btn btn-btn"><i class="material-icons">search</i> </button>-->
                    <!--</div>-->
                    <div class="searh-btn pr">
                        <input type="text" class="form-control border-0px search-input" placeholder="Seach enter store here....">
                        <button class="btn btn-btn"><i class="material-icons">search</i> </button>
                    </div>
                </div>
                <div class="search-close-icon">
                    <i class="material-icons">close</i>
                </div>
            </div>
        </div>
    </div>
    <!--search-slideup End-->
    <!-- Breadcrumbs start-->
    <div id="breadcrumbs" class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Checkout</h2>
                    <!-- Breadcrumbs -->
                    <div id="breadcrumbs-list">
                        <ul>
                            <li><span><i class="material-icons"><a href="index.php">Home</a></i></span></li>
                            <li><a href="shop.php"><span class="circle">Shop</span></a></li>
                            <li><span class="circle color-orange">Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End-->
    <br><br>
    <!--customer info section end-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--billing details section-->
                <div class="checkout-form m-b-100">
          
                <!-- order section-->
                <div class="order order-ceheckout m-b-30">
                  
                    <h3 class="line">DELIVERY METHOD</h3>
                    <div class=" table-responsive">
                        <table class="table  cart-table">

                            <tbody>
                              
                                  <tr>
                                    <td>
                                        <div class="cart-content  p-t-20 p-b-20">
                                            <b>How do you want your order delivered?</b><br>
                                             <div class="checkbox checkbox-success checkbox-circle">
                                              <input name="shipping" id="checkbox3" type="radio">Door Delivery    
                                          </div>
                                             

                                          <p>Delivery within Lagos state is within 2-3 business days after payment has been succefully recieved.</p>

                                            <p>Delivery for other cities is within 7 business days.</p>

                                            <p>Delivery within Warri, Delta state is within 2-3 business days after payment has been succefully recieved .</p>
                                            <br>
                                          
                                        <br>                                          
                                        </div>
                                    </td>
                                </tr>
                                    <tr>
                                     <td>
                                        <div class="cart-content  p-t-20 p-b-20">
                                         
                                             <div class="checkbox checkbox-success checkbox-circle">
                                              <input name="shipping" id="checkbox3" type="radio"> Pickup Station     
                                          </div>
                                          

                                            <h5><b>Pick-Up Station Lagos:</b></h5> 
                                            <p> 8, Flobora Close, Back of Chivita Company Ajao Estate, Lagos. </p><br> 
                                              
                                            <h5><b>Pick-Up Station Warri, Delta State:</b></h5>
                                            <h5> Show Room Address & Pick-Up Station Warri:</h5>
                                            <p>120, Airport Road, opposite FCMB Warri, Delta State.</p>
                                        </div>
                                    </td>
                                </tr>                               
                                <tr>
                                    <td>
                                        <div class="cart-content  shipping-cart p-b-6 p-t-17">
                                            <p class="shipping">Shipping Fee</p>
                                            <ul>
                                                <li>
                                                    <div class="checkbox checkbox-success checkbox-circle">
                                                        <label for="checkbox3"><input name="shipping" id="checkbox3" type="radio">Free Shipping</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-primary checkbox-circle">
                                                        <label for="checkbox2"><input name="shipping" id="checkbox2" type="radio">Next Day Delivery ($15)</label>
                                                        
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-info checkbox-circle">
                                                        <label for="checkbox6"><input name="shipping" id="checkbox6" type="radio">Flat Rate($5)</label>
                                                        
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                             <td>
                            
                        
                       </td>
                    </tr>
                </tbody>
            </table>

        </div>
       <!-- <div class="order-button m-t-50">

       </div>
        -->
       </div>
      </div>
     </div>    
     <!--billing details end-->
        <div class="col-md-6">
                <!-- order section-->
            <div class="order order-ceheckout m-b-30">
             <?Php  if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){?>
                <h3 class="line">Your Details</h3>
                <div class=" table-responsive">
                 <table class="table  cart-table">
                  <tbody>
                  <td>
                        <div class="cart-content  p-t-20 p-b-20">
                            <a class="product-title" href="">First Name: &nbsp;    <?php echo $_SESSION['fname'];?></a><br><br>
                            <a class="product-title" id="data" href="">LastName: &nbsp; <?php echo $_SESSION['lname'];?></a><br><br>
                            <a class="product-title" id="data" href="">Email: &nbsp; <?php echo $_SESSION['email'];?></a><br><br>
                            <a class="product-text-title" href="">Phone: <?php echo $_SESSION['phone'];?></a><br><br>
                            <a class="product-title" id="data" href="">Address: &nbsp;    <?php echo $_SESSION['address'];?></a><br><br>
                            <a class="product-text-title" href="">City:&nbsp;    <?php echo $_SESSION['city'];?></a><br><br>
                            <a class="product-title" id="data" href="">State: &nbsp;    <?php echo $_SESSION['state'];?></a><br>
                        </div>
                    </td>
                   

                       <?php                             
                          if (isset($_SESSION["cart"]) ){
                                    
                            // $id = $_SESSION["id"];
                            $glory = "('";
                            $glory .= implode("','",$_SESSION['cart']);
                            $glory .= "')";
                            $query = "SELECT * FROM newarrivals WHERE id IN ".$glory;
                               if ($result = mysqli_query($connection,$query)){
                                 $_SESSION["total"]  = 0; 
                                 
                                 while($show = mysqli_fetch_array($result)){
                                    $_SESSION['description'] = $show['description'];
                                    $price = $show['price'];
                                    $pic = $show['picture'];
                                    $id = $show['id'];
                                    
                                    $_SESSION["total"] = $_SESSION["total"] + $price;
                                ?>
                                   <tr>
                                    <td><br>
                                    <h3 class="line">Your Order</h3>
                                        <div class="cart-content  p-t-20 p-b-20">
                                            <a class="img-content" href=""><img src="<?php echo 'admin/newArrivalsFiles/'.$pic;?>" alt="" style="width:60px"></a>
                                            <a class="product-title" id="data" href=""><?php echo $_SESSION['description'];?></a>
                                            <a class="product-text-title" href="">1</a>
                                             <a class="product-title" id="data" href="">₦<?php echo number_format($price);?></a>
                                        </div>
                                    </td>
                                </tr>
                                 <?php
                                    }
                                  ?>
                               
                                <tr>
                             <td>
                              
                               <div class="total-order-price text-right m-t-25">
                                    <span class="total-order price">Total</span>
                                     <span class="pull-right"><strong>₦</strong>&nbsp;<?=  number_format($_SESSION["total"]);?></span>

                                </div>

                                <?php
                                 
                                  }
                                }
                     
                              ?>

                            <br>
                        </td>
                    </tr>
                </tbody>
            </table>
           
        </div>
       <div class="order-button m-t-50">
        <hr>
       </div><br>
        <div><a href="cart.php"style="color:#e16958;float:right"><h5>MODIFY CART</h5></a></div>
       <br>
        <?php
        }else{

        echo '';
           }
        ?><br><br>
         <?php

if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){


   echo'<div><button class=" btn btn-cart btn-default" style="border-radius:0;color:#F0AD4E"><a href="shop.php"style="color:#F0AD4E">CONTINUE</a>&nbsp;&nbsp;<span class="fa fa-shopping-cart"></span></button><button  class=" pull-right btn btn-cart btn-warning"style="border-radius:0;">
   <a href="paystack.php"style="color:white;">CHECKOUT</a>&nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-1x" aria-hidden="true"></i></button></div>';                                 




}else{

   header('Location:cart.php');

 }

?>
       </div>
      </div>
     </div>
    </div>
    <!-- order end-->
    <!-- footer -->
  <?php include("includes/footerr.php");?>