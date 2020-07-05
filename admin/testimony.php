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

      $desc  = $_POST['desc'];
      $name  = $_POST['name'];
      $post = $_POST['post'];
      $company = $_POST['company'];

       if(!empty($desc)&&!empty($name)&&!empty($post)&&!empty($company)){                     
                $sql = "INSERT INTO testimony(descriptions, name,post,company)";
                $sql .= "VALUES(
                    '".mysqli_real_escape_string($connection,$desc) . " ',
                     '".mysqli_real_escape_string($connection,$name) . " ',
                     '".mysqli_real_escape_string($connection,$post) . " ',  
                     '".mysqli_real_escape_string($connection,$company) . " '
                     )";
                
                   $result = mysqli_query($connection, $sql);
                   if(!$result){
                    echo ("Query Failed" . mysqli_error($connection));exit;
                  

                   } else {
                   $_SESSION['alert'] ='<div style="background-color:#58a758; color:#fff; text-align:center; font-size:17px; height:40px;margin:50px;padding-right:50px">Testimony Posted Successfull!</div>';
                    
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
            <a class="navbar-brand" href="#">Upload Recent Work</a>
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
                          <h4 class="card-title">Testimonial Form</h4>
                        </div>
                        <div class="card-body ">
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">Testimon*</label>
                            <input type="text" name="desc" class="form-control" id="" required="true" >
                          </div>
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">Name*</label><br>
                            <input type="text" name="name" class="form-control" id="" required="true" >
                          </div><br>
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Position*</label>
                            <input type="text" name="post" class="form-control" id="" required="true" >
                          </div>
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Company*</label>
                            <input type="text" name="company" class="form-control" id="" required="true" >
                          </div>                        
                          <button type="submit" name="submit" class="btn btn-rose">Post</button>
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
