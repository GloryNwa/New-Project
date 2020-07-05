<?php

// if(isset($_SESSION["cart"]) &&isset($_SESSION['qty'])){
//  unset($id,$_SESSION['cart'], $_SESSION['qty']);

  $cart = (isset($_SESSION['cart'])) ? count($_SESSION['cart']):0;
// }
ob_start();

?>

<?php 
 include_once('includes/nav.php');

 if(isset($_SERVER['HTTP_REFERER'])){
     $_SESSION['referrer']  = $_SERVER['HTTP_REFERER'];


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
                            <li><span><i class=""><a href="index.php"> Home</a></i></span></li>
                            <li><a href="shop.php"><span class="circle">shop</span></a></li>
                            <li><span class="circle color-orange">Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--customer info section end-->
    <div class="container">
        <div class="row">
           
            <!--billing details end-->
            <div class="col-md-12">
                <!-- order section-->
                <div class="order order-ceheckout m-b-30">
                     <?php
                  if(isset($_SESSION['alert'])){
                     echo $_SESSION['alert'];
                     unset($_SESSION['alert']);
                  }

                 ?>
                    <h3 class="line">Your Order</h3>
                    <div class=" table-responsive">
                        <table class="table  cart-table">

                            <tbody>
                                <?php
                                if (isset($_SESSION["cart"])&& isset($_SESSION['qty'])&&count($_SESSION['cart'])> 0 &&count($_SESSION['qty'])> 0 ){
                                    
                                    // $id = $_SESSION["id"];
                                    $glory = "('";
                                    $glory .= implode("','",$_SESSION['cart']);
                                    $glory .= "')";
                                    $query = "SELECT * FROM newarrivals WHERE id IN ".$glory." ORDER BY id DESC" ;
                                    
                                       if($result = mysqli_query($connection,$query)){
                                        
                                        $total = 0; 
                                         
                                         while($show = mysqli_fetch_array($result)){
                                          
                                             echo 'sessissoossllllsssson';exit;
                                            $desc = $show['description'];
                                            $price =  $show['price'];
                                            $id = $show['id'];        
                                            $pic = $show['picture'];
                                                                                     
                                         $total = $total + $price * $_SESSION['qty'];
                                        //  var_dump( $total + $price * $_SESSION['qty'] );exit;
                                       
                                        ?>    
                                         <tr>
                                         <td>
                                         <div class="cart-content  p-t-20 p-b-20">
                                            <a class="img-content" href=""><img src="<?php echo 'admin/newArrivalsFiles/'.$pic;?>" alt="" style="width:60px"></a>
                                            <a class="product-title" id="data" href=""><?php echo $desc;?></a>
                                            <a class="product-text-title" href=""><?php echo $_SESSION['qty'];?> </a>
                                             <a class="product-title" id="data" href="">₦<?php echo number_format($total);?></a>&nbsp;&nbsp;  

                                              <a onclick="return confirm('Are you really sure?')"href="delete.php?id=<?php echo $show['id'];?>">
                                               <span class="fa fa-trash" style="color:red;">&nbsp;REMOVE</span> 
                                               
                                              </a>

                                            </div><br><br><br>
                                           </td>        

                                           <?php
                                             
                                                     
                                            }
                                          }
                                         }
                                        ?>

                                     </tr>
                                     
                                 </tbody>
                                 
                              </table>
                              
                            </div>  
                            <?php
                  if (isset($_SESSION["cart"]) ){
                   $query = "SELECT * FROM newarrivals WHERE id IN ".$glory;
                    if ($result = mysqli_query($connection,$query)){
                       $total = 0;          
                       while($show = mysqli_fetch_array($result)){                      
                    
                        $amount = $show['price'];                    
                        $total = $total + $amount;
                      }  
                    ?>
                    <div style="float: right;padding-bottom: 50px"><strong>Total<span class="pull-right"> ₦<?=number_format($total);?> </strong></span><br> 
                      <b>Shipping fees not included yet</b><br>
                  </div><br>

                  <?php
                      }
                    }
                  ?><br><br>
                  
                    <?php

if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){


   echo '<div><button class=" btn btn-cart btn-default" style="border-radius:0;color:#F0AD4E"><a href="shop.php"style="color:#F0AD4E">CONTINUE</a>&nbsp;&nbsp;<span class="fa fa-shopping-cart"></span></button><button class=" pull-right btn btn-cart btn-warning"style="border-radius:0;">
       <a href="payment.php"style="color:white;">CHECKOUT</a>&nbsp;&nbsp;<i class="fa fa-long-arrow-right fa-1x" aria-hidden="true"></i></button></div>';                                 

}else{

    echo' <center style=""><i class="fa fa-shopping-cart fa-5x" style="color:black;padding:15px;border-radius: 50%;width:200px; height:200px;background-color:#c0c0c0;margin-left:60px;left:-19%;"></i>
    </center';
    echo '<center style="color:#000;margin-top:0px;position: relative;right:-10%;"><h4>Your cart is empty!</h4>
        <p style="color:black;">Browse our categories and discover our best deals!</p>

   <button class="btn btn-cart btn-warning style="border-radius:0;"><a href="shop.php"style="color:#fff">START SHOPPING</a>&nbsp;<i class="fa fa-shopping-cart" ></i></button></center>';    

    
 }

?>
</div>

</div><br>
</div>
 </div> 
<br><br><br>   

    <!-- order end-->

    <!-- footer -->
<?php include("includes/footerr.php");?>