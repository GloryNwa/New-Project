<?php include("includes/header.php");


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
                      <div class="">
                        <h3 class="p0" style=""></h3><br>
                      </div>
                      <?php
                     if(isset($_GET['category'])){
                         $cat  = $_GET['category'];  
                        $query = "SELECT * FROM newarrivals WHERE category='$cat' LIMIT 1";     
                         if ($sql = mysqli_query($connection,$query)) {
                           while($query_row = mysqli_fetch_assoc($sql)){
                             $cat = $query_row['category'];
                             $id = $query_row['id'];
                     
                            // echo "strzwwwwwzzing";exit; 
                        ?>
                      <h3><?php echo  $cat; ?></h3>
                        <div class="wrapper p4">
                        <?php
                       
                           $query2 = "SELECT * FROM `newarrivals` WHERE `category`='$cat' ORDER BY id DESC LIMIT 36";
                           if ($sql2 = mysqli_query($connection,$query2)) {

                              while($query_row2 = mysqli_fetch_assoc($sql2)){
                              
                                $pic = $query_row2['picture'];
                                $desc = $query_row2['description'];
                                $price = $query_row2['price'];
                                $pid = $query_row2['product_id'];
                                $id = $query_row2['id'];
                       ?>     
                        <article class="grid_4 omega">
                        <div class="indent-right">
                        <figure class="frame2 p2"><img src='<?php echo "admin/newArrivalsFiles /" .$pic;?>'alt=""style="height:200px;width:250px"></figure>
                        <p class=" prev-indent-bot"><?php echo substr($desc,0,30) ;?></p>
                        <p style="font-size:18px"><strong>Product ID:</strong><?php echo $pid;?>
                         <p style="font-size:22px"><span class="price">₦<?php echo number_format($price);?></span>
                        <a data-toggle="modal" data-target="#<?php echo  $query_row2['id'];?>" href="#" class="button" style="margin:5px">Buy Now</a> <hr>                                                                                               
                   </p>

                 <div class="modal fade" id="<?php echo  $query_row2['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle"><?php echo substr($desc,0,30) ;?></h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>      
                    <div class="modal-body" style="overflow:scroll">
                    
                   <article class="">
                        <figure class="frame2 p2"><img src='<?php echo "admin/newArrivalsFiles /" .$pic;?>'alt=""style="height:300px;width:100%"></figure></td>
                        <!-- <p class=" prev-indent-bot"><?php echo substr($desc) ;?> -->
                        <p style="font-size:18px"><strong>Product ID:</strong><?php echo $pid;?></p>
                        <p style="font-size:18px"><span class="price">₦<?php echo number_format($price);?></span>
                      <div class="modal-footer">
                     
                      <form method="POST" action="viewProduct.php" >
                         Select Qty:<select name="qty" required="required">
                          <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>				                          
                     </select>
                     <!-- <input type="hidden" value="<?php echo $query_row2['id'];?> "> -->
                      <button class="button" name="submit" style="border:none">Add To Cart</button>
                      <button class="button" data-dismiss="modal" style="border:none">Close</button>
                     
                  </form>
                  <?php
                 
                     ?>
                      </div>
                    </div>
                  </div>
                </div>
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
 <?php
                       if(isset($_POST['submit'])){
                        //  echo 'isset';exit;
                        $qty = $_SESSION['qty']= $_POST['qty'];
                        // var_dump($_SESSION['qty']);exit;
                        if(!empty($qty)){ 
                          header("Location:addtocart.php".$id);exit;             
                        
                     }else{
                      echo 'select quantity';
                     }
                     }
                        
                      ?>
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

                         
  <!-- Modal -->
  <div class="bg-bot">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
         <article class="grid_4">
            <h3 class="prev-indent-bot2">Information</h3>
             <ul class="list-2">
              <li><a href="about.php">About Us</a></li>
              <li><a href="delivery.php">Delivery Information</a></li>
              <li><a href="showRoom.php">Our Show Rooms</a></li>
              <li><a href="info.php">About Our Furniture</a></li>
              <li><a href="catalogue.php">Project Archive</a></li>
               <li><a href="category.php">Products Category</a></li>
               <li><a href="recentjobs.php">Recent & Ongoing Projects</a></li>
               <li class="last-item"><a href="privacy.php">Privacy Policy</a></li>
               <li><a href="terms.php">Terms & Conditions</a></li>
            </ul>
          </article>
          <article class="grid_4">
            <h3 class="prev-indent-bot2">Service List</h3>
            <ul class="list-2">
              <li><a href="#">Furniture & Fixtures</a></li>
              <li><a href="#">WallPapper, WallPanel + Installation etc.</a></li>
              <li><a href="#">Painting, Screeding, POP Ceiling</a></li>
              <li><a href="#">Interior Advisory</a></li>
              <li><a href="#">Lightings</a></li>
               <li><a href="#">Space Management</a></li>
               <li><a href="#">Rising Damp Treatment</a></li>
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

            <b> Phone No:</b><br> 08032894147, 07052749021 <br>

            <b>Email:</b><br>interiorfrontline@gmail.com<br>info@frontlineinteriors.com
          
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
          <div>Copyright &copy; 2020<a href="#">FrontLine Interiors</a> - All Rights Reserved</div>
          <div>Design, Developed & Programmed by <a target="_blank" href="https://bit.ly/brilliant-developers">Brilliantdevelopers.net</a></div>
          <!-- {%FOOTER_LINK} -->
        </div>
        <div class="grid_4"> <span class="phone-numb"><span></span>08032894147<br>07052749021</span> </div>
        <div class="grid_4">
        <ul class="list-services">
        <li><a href="https://www.facebook.com/frontlineInteriors"></a></li>
            <li><a class="item-2" href="https://www.twitter.com/frontlineIn"></a></li>
            <li><a class="item-3" href="https://www.instagram.com/frontlineinteriors"></a></li>
            <li><a class="item-4" href="https://api.whatsapp.com/send?phone=+2348032894147"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- <script>$('#exampleModalLong').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
    $(e.currentTarget).find('input[name="id"]').val(userid);
});</script> -->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


