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

<!-- if(!isset($_SESSION['password']) || $_SESSION['password'] != 'richgirlforever') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';
     //maybe redirect to login page

     die();


}


?> -->

<?php



if(isset($_POST['submit'])){
      $category  = $_POST['category'];
      $desc  = $_POST['desc'];
      $amount  = $_POST['amount'];
      $file  = $_FILES['file'];

   
      // $fileExtension =  array('gif','png' ,'jpg', 'jpeg');
    
      // $extension = pathinfo($file, PATHINFO_EXTENSION);
      $type = $_FILES['file']['type'];
      $fileSize = $_FILES['file']['size'];     
      $tmp_name = $_FILES['file']['tmp_name'];

       if(!empty($_FILES['file']["name"])){
      
          $tmp_file = $_FILES['file']['tmp_name'];
          $target_file= basename($_FILES['file'] ['name']);
          $upload_dir = "categoryFiles/";

            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                            
                $sql = "INSERT INTO productcategory(description, category,amount,file)";
               $sql .= "VALUES(  
          
                     ' " .  mysqli_real_escape_string($connection,$desc) . " ', 
                     '".mysqli_real_escape_string($connection,$category)."',
                     '".mysqli_real_escape_string($connection,$amount)."',
                     '".mysqli_real_escape_string($connection,$target_file)."' 
                     )";

                

                
                   $result = mysqli_query($connection, $sql);
                   if(!$result){
                    echo ("Query Failed" . mysqli_error($connection));exit;
                  

                   } else {
                   $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px;padding-right:50px">File Uploaded successfull!</div>';
                    
                    }

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
            <a class="navbar-brand" href="#">Upload Product Category</a>
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
                          <h4 class="card-title">Product Category Form</h4>
                        </div>
                        <div class="card-body ">
                        <div class="form-group">
                        
                         </div>
                         
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Description*</label>
                            <input type="text" name="desc" class="form-control" id="" required="true" >
                          </div>
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">Amount *</label>
                            <input type="text" name="amount" class="form-control" id="" >
                          </div>
                           
                          Select Category: <select name="category" required="">
                          <option value="">Select Category</option>
                           <option value="Furniture/Fixture">Furniture/Fixture</option>
                           <option value="WallPappers,WallPanel/Installation">WallPappers</option>
                           <option value="WallPanel/Installation">WallPanel/Installation</option>
                           <option value="Lightings">Lightings</option>
                           <option value="Blinds,Curtains&Bedding">Blinds,Curtains & Bedding</option>
                           <option value="Painting,Screeding,POP-Ceiling">Painting,Screeding,POP-Ceiling</option>
                           <option value="Rising Damp Treatment">Rising Damp Treatment</option>
                           <option value="Interior-Advisory">Interior Advisory</option>
                           <option value="Space-management">Space Management</option>
                           <option value="Motors Interior/Accessories">Motors-Interior/Accessories</option>
                         </select>
                         <hr><br>

                          <!-- Select Month: <select name="month" required="">
                          <option value="">Select Month</option>
                           <option value="Jan.">Jan.</option>
                           <option value="Feb.">Feb.</option>
                           <option value="March">March</option>
                           <option value="April">April</option>
                           <option value="May">May</option>
                           <option value="June">June</option>
                           <option value="July">July</option>
                           <option value="Aug.">Aug.</option>
                           <option value="Sept.">Sept.</option>
                           <option value="Oct.">Oct.</option>
                           <option value="Nov.">Nov.</option>
                           <option value="Dec.">Dec.</option>
                         </select> -->
                    
                           
                           
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Upload File*</label>
                           
                          </div>
                           <input type="file" name="file" class="form-control" id="" required="true" equalTo=""><br>                         
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
