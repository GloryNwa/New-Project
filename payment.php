<?php ob_start();

include_once("admin/include/db.php");
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
                </div>Join our mailing list and receive updates on upcoming activities and events
                <div class="col-md-9 p-0">
                    <!--<div class="custom-input-box search-btn">-->
                    <!--<input class="form-control border-bottom input-box" placeholder="Seach enter store here...." type="text">-->
                    <!--<button class="btn btn-btn"><i class="material-icons">search</i> </button>-->
                    <!--</div>-->
                    <div class="searh-btn pr">
                        <input type="text" class="form-control border-0px search-input" placeholder="Seach enter store here....">
                        <button class="btn btn-btn"><i class="material-icons">search</i></button>
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
                        <li><a href="index.php"><span class="circle">Home</span></a></li>
                            <li><a href="shop.php"><span class="circle">Shop</span></a></li>
                            <li><span class="circle color-orange">Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Breadcrumbs End-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--billing details section-->
                <div class="checkout-form m-b-100">
                    <h3>BILLING DETAILS</h3>
                    <?php
                    if(isset($_SESSION['alert'])){
                        echo  $_SESSION['alert'];
                        unset($_SESSION['alert']);
                    }


                    ?>


                    <?php
                     if(isset($_POST['submit'])){
                        $fname = $_SESSION["fname"] = $_POST['fname'];
                        $lname = $_SESSION["lname"] = $_POST['lname'];
                        $lname = $_SESSION["email"] = $_POST['email'];
                        $phone = $_SESSION["phone"] = $_POST['phone'];
                        $city= $_SESSION['city'] = $_POST['city'];
                        $state = $_SESSION['state'] = $_POST['state'];
                        $message = $_SESSION['address'] = $_POST['address'];
                      
                      
                        if(!empty($_SESSION['fname'])&&!empty($_SESSION['lname'])
                        &&!empty($_SESSION['email'])
                         &&!empty($_SESSION['phone'])
                         &&!empty($_SESSION['city'])&&!empty($_SESSION['state'])
                         &&!empty( $_SESSION['address'])){
                      
                          header("Location:deliveryMethod.php");exit;
                          // echo "$('#formm').trigger('reset');"; 
                          // echo "$('#text').fadeOut(2000);";
                         }
                      
                      }

                      
                    ?>
                   
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="hidden" name="location" value="<?php echo $_SERVER['HTTP_REFERER'];?>">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/> 
                                    <input type="text" name="fname" class="form-control bg-grey" value=" ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" name="lname" class="form-control"value="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="">
                                </div>
                            </div>

                        </div>
                      
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Street address.." required>
                        </div>
                        
                        <div class="form-group">
                            <label>Town / City</label>
                            <input type="text" name="city" class="form-control" placeholder="Town/City..">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control" placeholder="State" required>
                                </div>
                            </div>
                            
                        </div>                   
                       
                    <button class="btn btn-warning btn-xl proceedBtn" name="submit">PROCEED TO NEXT STEP&nbsp;</button>
                        
                    </form>
                </div>
            </div><br><br>


 
            <!--billing details end-->

            <div class="col-md-6">
                <!-- order section-->
                <div class="order order-ceheckout m-b-30">
                    <?Php  if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){?>
                    <h3 class="line">Your Order</h3>
                    <div class=" table-responsive">
                        <table class="table  cart-table">

                            <tbody>
                                <?php
                                if (isset($_SESSION["cart"]) ){
                                    
                                    // $id = $_SESSION["id"];
                                    $glory = "('";
                                    $glory .= implode("','",$_SESSION['cart']);
                                    $glory .= "')";
                                    $query = "SELECT * FROM newarrivals WHERE id IN ".$glory;
                                       if ($result = mysqli_query($connection,$query)){
                                        $total = 0; 
                                         
                                         while($show = mysqli_fetch_array($result)){
                                            $desc = $show['description'];
                                            $price = $show['price'];
                                            $pic = $show['picture'];
                                            $id = $show['id'];
                                            
                                            $total = $total +$price;
                                        ?>
                                  <tr>
                                    <td>
                                        <div class="cart-content  p-t-20 p-b-20">
                                            <a class="img-content" href=""><img src="<?php echo 'admin/newArrivalsFiles/'.$pic;?>" alt="" style="width:60px"></a>
                                            <a class="product-title" id="data" href=""><?php echo $desc;?></a>
                                            <a class="product-text-title" href=""></a>
                                             <a class="product-title" id="data" href="">₦ <?php echo  number_format($price);?></a>
                                           
                                        </div>
                                    </td>
                                     
                                </tr>

                               
                               
                               <tr>
                               <td>
                              
                              

                                <?php
                                 }
                                 }?>
                                <br>
                                 <!-- <div class="total-order-price text-right m-t-25">
                                 <span class="total-order price">Total</span>
                                  <span class="pull-right"><strong>    ₦    </strong>:<?=$total;?></span><br> -->
                                  <div style="float: right;padding-bottom: 50px">Total<span class="pull-right total-order price"><strong> ₦ </strong><?=$total;?></span><br> 
                        Shipping fees not included yet<br>
              <!-- </div>     -->

                             </div>
                                 <?php
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
        ?>
       </div>
      </div>
     </div>
    </div>
    <!-- order end-->

    <!-- footer -->
     <?php include("includes/footerr.php");?>