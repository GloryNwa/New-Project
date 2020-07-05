<?php
 // include_once('includes/header.php');
if ( isset($_SESSION["cart"]) ){
 unset($id,$_SESSION['cart']);

}
ob_start();

?>
  <?php if(isset($_POST["qty"])){
    $qty = $_SESSION["qty"] = $_POST["qty"];

    if(!empty($_SESSION["qty"])){
      header("Location:cart.php");exit;
    }
  }
?>

<?php 


 if(isset( $_SERVER['HTTP_REFERER'])){
     $_SESSION['referrer']  = $_SERVER['HTTP_REFERER'];


  }
   
?>

<?php



$cart = (isset($_SESSION['cart'])) ? count($_SESSION['cart']):0;?>

<?php include("includes/header.php");?>


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
                     <div class="indent-left p2">
                        <h3 class="p0"></h3>
                      </div>
                      <?php
                        if(isset($_GET['category'])){
                         $category  = $_GET['category']; 
                          $query = "SELECT category FROM productcategory WHERE category='$category' LIMIT 1";
                           if ($sql = mysqli_query($connection,$query)) {
                              while($query_row = mysqli_fetch_assoc($sql)){
                               $cat = $query_row['category'];
                          ?>
                          <h3 class="p0"  style=""><?php echo  $cat; ?></h3><br>
                          <div class="">
                       <?php
                        $query2 = "SELECT * FROM `productcategory` WHERE `category` = '$category' AND category ='$cat' ORDER BY id DESC LIMIT 42";
                           if ($sql2 = mysqli_query($connection,$query2)) {
                             while($query_row2 = mysqli_fetch_assoc($sql2)){
                               $pic = $query_row2['file'];
                                $desc = $query_row2['description'];
                                $cat = $query_row2['category'];
                                $amount = $query_row2['amount'];
                                $id = $query_row2['id'];
                        ?>
                         <article class="">
                           <div class="indent-right">
                          
                            
                          <figure class="frame2 p2"><img src='<?php echo "admin/categoryFiles /" .$pic;?>'  alt=""style="height:500px;width:100%"></figure>
                          <?php if($cat == 'WallPappers,WallPanel/Installation' ){?>
                          <p class=" prev-indent-bot"><?php echo $desc ;?><br>
                            <?php  echo '₦' .$amount ;?>
                              <a class="button fright" href="shop.php">SHOP NOW</a><br><br>

                             <?php
                            }else{
                              echo '';
                            }?>
                               <?php if($cat == 'Furniture/Fixture' ){?>
                               <div class="wrapper"><span class="price fleft" style="background:#f4f4f4; padding:3px;
                              border:1px #ccc solid; border-radius:50px">₦<?php echo $amount;?></span>
                              <a class="button fright" href="shop.php">SHOP NOW</a><br><br><br><br>

                             <?php
                            }else{
                              echo '';
                            }?>
                               <?php if($cat == 'Lightings' ){?>
                               <div class="wrapper"><span class="price fleft" style="background:#f4f4f4; padding:3px;
                              border:1px #ccc solid; border-radius:50px">₦<?php echo $amount;?></span>
                              <a class="button fright" href="shop.php">SHOP NOW</a><br><br><br><br>

                             <?php
                            }else{
                              echo '';
                            }?>
                               <?php if($cat == 'Motors Interior/Accessories'){?>
                               <div class="wrapper"><span class="price fleft" style="background:#f4f4f4; padding:3px;
                              border:1px #ccc solid; border-radius:50px">₦<?php echo $amount;?></span>
                              <a class="button fright" href="shop.php">SHOP NOW</a><br><br><br><br>

                             <?php
                            }else{
                              echo '';
                            }?>
                           
                            <hr>
                           &nbsp;&nbsp;<!-- <a href="fullcat.php?id=<?php echo $query_row2['id'];?>" style="text-decoration:none">See More</a> --></p>
                           </div>
                           </article>
                          <?php
                             }
                          }
                       ?>
                      </div>
                       <?php
                        
                     }

                   ?>
                  <?php
                       }
                          
                     }

                   ?>
                   <p style="font-size:18px"><strong>You Love what you see?</strong> &nbsp;&nbsp;<a  href="contacts.php" style="text-decoration:none">Contact Us</a><br><strong>Or Call Us -</strong> 08032894147 </p>
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
  <?php include("includes/footer2.php");?>