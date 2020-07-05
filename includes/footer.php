<!-- <div class="bg-bot"> -->
    <!-- <div class="main">
      <div class="container_12">
        <div class="wrapper">
         

       
        </div>
      </div>
    </div>
  </div> -->

  <div class="bg-bot">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
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

          <article class="grid_4">
            <h3 class="prev-indent-bot">Testimonials</h3>
            <div class="quote">
             <?php
              $query ="SELECT * FROM testimony ORDER BY id DESC LIMIT 1";
               if ($sql = mysqli_query($connection,$query)) {
                  while($query_row = mysqli_fetch_assoc($sql)){
             
                    $desc = $query_row['descriptions'];
                    $name = $query_row['name'];
                    $post = $query_row['post'];   
                    $company = $query_row['company'];              
             ?>
              <p class="prev-indent-bot"><?php echo (substr($desc,0,60));?></p>
              <h5><?php echo $name;?></h5>
              <p><?php echo $post;?></p>
              <h6><?php echo $company;?>&nbsp;&nbsp;<a href="testimony.php" style="color:#000; text-decoration:none !important">View More</a></h6>
              <!-- <p class="img-indent-bot"><a class="button" href="testimony.php">View More</a></p> -->
               <?php
                   }

                 }
              ?>
            </div>
         </article>

         <article class="grid_4">
            <h3 class="p2">What's New?</h3>
            <div class="wrapper">
              <?php
              $query ="SELECT * FROM newarrivals ORDER BY id DESC LIMIT 1";
               if ($sql = mysqli_query($connection,$query)) {
                  while($query_row = mysqli_fetch_assoc($sql)){
                    $desc = $query_row['description'];
                    $pic = $query_row['picture'];    
                    $id = $query_row['id'];              
             ?>
              <figure class="img-indent frame2"><img src='<?php echo "admin/newArrivalsFiles /".$pic;?>' alt=""style="height:150px;width:130px"></figure>
              <div class="extra-wrap">
                <p class="img-indent-bot"><?php echo (substr($desc,0,55)) ;?>
                <a class="button" href="shop.php">View More</a></p></div>
                <?php
                 }

                }

               ?>
              </div>
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
            
           <b> Phone No:</b><br> 08032894147,07052749021 <br>

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
          <div>Copyright &copy;20202 <a href="#">FrontLine Interiors</a> - All Rights Reserved</div>
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
           <!-- <li><a class="item-4" href="https://wa/+2348032894147"></a></li> -->
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</footer>
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
</body>
</html>
