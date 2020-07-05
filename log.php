<?php  include("includes/nav.php");

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
                    <h2>LOGIN</h2>
                    <!-- Breadcrumbs -->
                    <div id="breadcrumbs-list">
                        <ul>
                            <li><a href="../index.php"><span>Home<i class="material-icons"></i></span></a></li>
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
    <!--customer info section-->
 
    <!--customer info section end-->
    <div class="container">
           
        <div class="row">
            <div class="col-md-9">
                <!--billing details section-->

                <div class="checkout-form m-b-100">
                  <?php
                    if(isset($_SESSION['alert'])){
                        echo  $_SESSION['alert'];
                        unset($_SESSION['alert']);
                    }


                    ?>
                    
                    <hr>
                    <form action="login_action.php" method="POST">
                                           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                        </div> 
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phone No:</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone No:" required>
                                </div>
                            </div>


                        </div>                                          
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            
                        </div>                       
                            <button class="btn btn-warning" name="submit">LOGIN</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php" style="color:#f0ad4e">New Customer?Sign Up!</a>                     
                    </form>
                </div>
            </div>
            <!--billing details end-->            
     </div>
    </div>
    <!-- order end-->

    <!-- footer -->
    <?php include("includes/footerr.php");?>