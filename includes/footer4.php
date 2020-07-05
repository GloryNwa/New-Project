
    <div class="">
    <div class="">
      <div class="">
        <div class="">
            <article class="grid_4">
            <div class="indent-right2">
              
              
           
            </div>
          </article>
          </article>

          <article class="grid_4">
            
            
           
             
          </article>
         <article class="grid_4">
            <h3 class="p2"></h3>
           
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
          <div>Copyright &copy; 2020 <a href="#">FrontLine Interiors</a> - All Rights Reserved</div>
          <div>Design, Developed & Programmed by <a target="_blank" href="https:/bit.ly/brilliant-developers">Brilliantdevelopers.net</a></div>
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
