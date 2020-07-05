<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="logo m-b-30">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                      
                       
                       
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                       
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- <p><span><i class="fa fa-copyright"></i></span> 2019 Happy store. - All Right Reserved</p> -->
                        <p><span><i class="fa fa-copyright"></i></span>Copyright &copy; <a href="#">FrontLine Interiors</a> - All Rights Reserved</p>
                        <p><span><i class="fa fa-copyright"></i></span>Design, Developed & Programmed by <a target="_blank" href="https:/bit.ly/brilliant-developers">Brilliantdevelopers.net</a></p>
          <!-- {%FOOTER_LINK} -->
        </div>
             <b>Lagos Address:</b><br>
            8, Flobora Close, Back of Chivita Company Ajao Estate, Lagos <br>

            <b> Phone No:</b><br> 08032894147, 07052749021 <br>
 
                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer End-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="js/lib/jquery/jquery-1.12.0.min.js"></script>
    <script src="js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl-carousel-init.js"></script>
    <script src="js/lib/owl-carousel/home-init.js"></script>
    <script src="js/lib/parallax/parallax.js"></script>
    <script src="js/lib/megamenu/bootsnav.js"></script>
    <script src="js/lib/timer/jcountdown.js"></script>
    <script src="js/lib/timer/timer-init.js"></script>
    <script src="js/lib/wow/wow.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
$(document).ready(function() {
    $("#btnFetch").click(function() {
      // disable button
      $(this).prop("disabled", true);
      // add spinner to button
      $(this).html(
        `<span class="fa fa-spinner fa-pulse"></i></span> processing...`
      );

      setTimeout(function(){
        /*submit the form after 5 secs*/
        $('#testForm').submit();
    },5000)
    window.location.href = "deliveryMethod.php";
   

    });

    $('.proceedBtn').on('click', function(){
        $(this).append('<span class="fa fa-spinner fa-pulse"></i></span>');
    });
    
});
</script>
</body>

</html>
