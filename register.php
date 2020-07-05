<?php  include("includes/nav.php");?>



 
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
                    <h2>Create Account</h2>
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
            <h4 style="color:#f0ad4e">Kindly create an account by entering your details below. If you are a returning customer kindly login.</h4><hr> <br>
        <div class="row">
            <div class="col-md-10">
                <!--billing details section-->

                <div class="checkout-form m-b-100">
                  
                   
                    <h4>CREATE ACCOUNT TO COMPLETE YOUR SHOPPING</h4>
                    <?php
                    if(isset($_SESSION['alert'])){
                        echo  $_SESSION['alert'];
                        unset($_SESSION['alert']);
                    }


                    ?>
                    
                    <hr>
                    <form action="reg_script.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" name="fname" class="form-control bg-grey" placeholder="John" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Doe" required>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="0xxxxxxxxx90" required>
                                </div>
                            </div>

                        </div>                                         
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="xxxxxx" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" name="cpass" class="form-control" placeholder="Re-Type Password" required>
                                </div>
                            </div>
                        </div>                       
                        <button class="btn btn-warning" name="submit">CREATE ACCOUNT</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php" style="color:#f0ad4e">Returning Customer?Login!</a>                         
                    </form>    
                </div>
            </div>




            <!--billing details end-->

             
     </div>
    </div>
    <!-- order end-->

    <!-- footer -->
    <?php include("includes/footerr.php");?>