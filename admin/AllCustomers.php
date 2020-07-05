<?php ob_start();
session_start();
if(!isset($_SESSION['password']) || $_SESSION['password'] != 'edeywork2020') {
  echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';?>
  <img src="assets/tt.gif" alt="" style="width:400px;margin-left:300px"></a>


<?php

     die();


}




?>

 <?php include("include/header.php");?>

<?php

if(isset($_POST['submit'])){
      $fname  = $_POST['fname'];
      $phone  = $_POST['phone'];
      $email  = $_POST['email'];
      $cat = $_POST['category'];
      $address  = $_POST['address'];
      $city  = $_POST['city'];
      $state  = $_POST['state'];

  
 if(!empty($fname)&&!empty($phone)&&!empty($email)&&!empty($cat)&&!empty($address)&&!empty($city)&&!empty($state)){  

        $sql = "INSERT INTO clients(firstname,phone,email,address,city,state,category)";
        $sql .= "VALUES( 
                '".mysqli_real_escape_string($connection,$fname) . " ',
                '".mysqli_real_escape_string($connection,$phone) . " ',
                ' " .mysqli_real_escape_string($connection,$email) . " ',
                '".mysqli_real_escape_string($connection,$address) . " ',
                ' " .mysqli_real_escape_string($connection,$city) . " ',
                '".mysqli_real_escape_string($connection,$state) . " ',
                ' " .mysqli_real_escape_string($connection,$cat) . " '
                )";
                   $result = mysqli_query($connection, $sql);
                   if(!$result){
                    echo ("Query Failed" . mysqli_error($connection));exit;
                  

                   } else {
                   $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px;padding-right:50px">Data Inserted Successfully!</div>';
                    
                    }

                }
             }
    
   
?>



    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="#">Upload All Clients Details</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
           
            <ul class="navbar-nav">
             
             
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
               
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                    <form id="" action="" method="POST" enctype="multipart/form-data">
                     <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                      
                        <div class="card-header card-header-rose card-header-icon">
                          <div class="card-icon">
                            <i class="material-icons">arrow_upward</i>
                          </div>
                          <h4 class="card-title">Customers Form</h4>
                        </div>
                        <div class="card-body ">
                         <div class="form-group">
                            <label for="" class="bmd-label-floating">Full Name*</label>
                            <input type="text" name="fname" class="form-control" id="" required="true" >
                          </di>
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">Phone*</label>
                            <input type="text" name="phone" class="form-control" id="" required="true" >
                          </div>
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Email*</label>
                            <input type="text" name="email" class="form-control" id="" required="true" maxlength="100">
                          </div><br>
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">Address*</label>
                            <input type="text" name="address" class="form-control" id="" required="true" >
                          </di>
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">City*</label>
                            <input type="text" name="city" class="form-control" id="" required="true" >
                          </div>
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">State*</label>
                            <input type="text" name="state" class="form-control" id="" required="true" maxlength="100">
                          </div><br>
                          Select Customer Category: <select name="category" required="">
                          <option value="">Select Category</option>
                           <option value="Gold">Gold</option>
                           <option value="Silver">Silver</option>
                           <option value="Bronze">Bronze</option>
                           
                         </select>
                         <hr><br>
                                                 
                          <button type="submit" name="submit" class="btn btn-rose">Upload</button>
                        </div>
                      
                    </form>
                  </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            



            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
  <?php include("include/footer.php");?>
