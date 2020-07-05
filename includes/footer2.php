
    <div class="bg-bot">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
            <article class="grid_4">
            <div class="indent-right2">
              <h3 class="p2">New Arrivals</h3>
              <article class="grid_4">
            
            <div class="wrapper">
            <?php
              $query ="SELECT * FROM newarrivals  ORDER BY id DESC LIMIT 1";
               if ($sql = mysqli_query($connection,$query)) {
                  while($query_row = mysqli_fetch_assoc($sql)){
                    $desc = $query_row['description'];
                    $pic = $query_row['picture'];
                    $id = $query_row['id'];                 
             ?>
             <figure class="img-indent frame2"><img src='<?php echo "admin/categoryFiles /".$pic;?>' alt=""style="height:120px;width:120px"></figure>
              <p class="prev-indent-bot"><?php echo (substr($desc,0,55)) ;?>
              <a class="button"  href="viewProduct.php?category=<?php echo $query_row['category']; ?>">View More</a></p>
              <?php
               }

             }

             ?>
            </div>
          </article>
          </article>

          <article class="grid_4">
            <h3 class="p2">Project Archive</h3>
             <?php
              $query ="SELECT * FROM productarchive ORDER BY id DESC LIMIT 1";
               if ($sql = mysqli_query($connection,$query)) {
                  while($query_row = mysqli_fetch_assoc($sql)){
                    $desc = $query_row['description'];
                    $pic = $query_row['file'];
                    $id = $query_row['id'];                 
             ?>
            <div class="wrapper">
             
              <figure class="img-indent frame2"><img src='<?php echo "admin/archiveFiles /".$pic;?>' alt=""style="height:120px;width:120px"></figure>
              <div class="extra-wrap">
                <p class="img-indent-bot"><?php echo (substr($desc,0,55)) ;?> <a class="button" href="catalogue.php">View More</a></p>
                 </div>
              
            </div>
              <?php
              }

            }

            ?>
          </article>
          <article class="grid_4">
            <h3 class="p2">Ongoing Projects</h3>
            <div class="wrapper">
             <?php
              $query ="SELECT * FROM recentwork ORDER BY id DESC LIMIT 1";
               if ($sql = mysqli_query($connection,$query)) {
                  while($query_row = mysqli_fetch_assoc($sql)){
                    $desc = $query_row['description'];
                    $pic = $query_row['file'];  
                    $id = $query_row['id'];                       
             ?>
              <figure class="img-indent frame2"><img src='<?php echo "admin/recentFiles /".$pic;?>' alt=""style="height:150px;width:120px"></figure>
              <div class="extra-wrap">
                <p class="img-indent-bot"><?php echo (substr($desc,0,55)) ;?>
                <a class="button" href="recentjobs.php">View More</a></p></div>
                <?php
              }

            }

            ?>
            </div>
          </article>
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
              <li><a href="showRoom.php">Our Show Rooms</a></li>
              <li><a href="info.php">About Our Furniture</a></li>
              <li><a href="catalogue.php">Project Archive</a></li>
               <!-- <li><a href="category.php">Products Category</a></li> -->
               <li><a href="recentjobs.php">Recent & Ongoing Projects</a></li>
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

           <b> Phone No:</b><br> 08032894147,07052749021 <br>08033727533<br>
           
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
          <div>Copyright &copy; 2020 <a href="#">FrontLine Interiors</a> - All Rights Reserved</div>
          <div>Design, Developed & Programmed by <a target="_blank" href="https://bit.ly/brilliant-developers">Brilliantdevelopers.net</a></div>
          <!-- {%FOOTER_LINK} -->
        </div>
        <div class="grid_4"> <span class="phone-numb"><span></span>08032894147<br>07052749021 </span> </div>
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
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(window).load(function () {
    // We only want these styles applied when javascript is enabled
    $('div.navigation').css({
        'width': '320px',
        'float': 'right'
    });
    $('div.content').css('display', 'block');

    // Initially set opacity on thumbs and add
    // additional styling for hover effect on thumbs
    var onMouseOutOpacity = 0.5;
    $('#thumbs ul.thumbs li span').opacityrollover({
        mouseOutOpacity: onMouseOutOpacity,
        mouseOverOpacity: 0.0,
        fadeSpeed: 'fast',
        exemptionSelector: '.selected'
    });

    // Initialize Advanced Galleriffic Gallery
    var gallery = $('#thumbs').galleriffic({
        delay: 7000,
        numThumbs: 12,
        preloadAhead: 6,
        enableTopPager: false,
        enableBottomPager: false,
        imageContainerSel: '#slideshow',
        controlsContainerSel: '',
        captionContainerSel: '',
        loadingContainerSel: '',
        renderSSControls: true,
        renderNavControls: true,
        playLinkText: 'Play Slideshow',
        pauseLinkText: 'Pause Slideshow',
        prevLinkText: 'Prev',
        nextLinkText: 'Next',
        nextPageLinkText: 'Next',
        prevPageLinkText: 'Prev',
        enableHistory: true,
        autoStart: 7000,
        syncTransitions: true,
        defaultTransitionDuration: 900,
        onSlideChange: function (prevIndex, nextIndex) {
            // 'this' refers to the gallery, which is an extension of $('#thumbs')
            this.find('ul.thumbs li span').css({
                opacity: 0.5
            })
        },
        onPageTransitionOut: function (callback) {
            this.find('ul.thumbs li span').css({
                display: 'block'
            });
        },
        onPageTransitionIn: function () {
            this.find('ul.thumbs li span').css({
                display: 'none'
            });
        }
    });
});
</script>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal"><?php echo  $cat; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow:scroll">
      <?php
      // if(isset($_GET['id'])){
      //   $idd  = $_GET['id']; 
      //   echo 'fffffff';
      //  $query1 = "SELECT * FROM `newarrivals` WHERE `id`='$idd'";
      //  var_dump($id);
        // if ($sql1 = mysqli_query($connection,$query1)) {

        //  while($row = mysqli_fetch_assoc($sql1)){
        //   $pic = $row['picture'];
        //   $desc = $row['description'];
        //   $price = $row['price'];
        //   $pid = $row['product_id'];
          // $id = $row['id'];
     ?>

  <article class="grid_4 omega">
  <div class="indent-right">
  <figure class="frame2 p2"><img src='<?php echo "admin/newArrivalsFiles /" .$pic;?>'alt=""style="height:280px;width:100%"></figure>
  <p class=" prev-indent-bot"><b>Name:</b> <?php echo $desc;?></p>
  <a style="font-size:18px"><strong>Product ID:</strong><?php echo $pid;?></a><br>
    <a style="font-size:22px"><span class="price">₦<?php echo number_format($price);?></a></span></a></p>
    <?php
      //   }
      // }
    // }
   ?>
</div>
      <div class="modal-footer">
      <form  action="" method="POST">
        Select Qty:<select name="qty" required="required">
        <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>				                          
    </select>
    
        <?php echo'<a class="button"  href="addtocart.php?id='.$id.'"
         style="margin:0px">Add To Cart</a>';?>
           <button class="button" data-dismiss="modal"style="border:none">Close</button>
   </form>
 
      </div>
    </div>
  </div>
</div>


</body>
</html>
