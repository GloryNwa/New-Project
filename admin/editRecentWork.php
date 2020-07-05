
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
     $id  = $_GET['id'];

         $query = "SELECT day,month, year, file, description FROM recentwork WHERE `id`='$id'";
          if ($query_run = mysqli_query($connection,$query)) {
          while($query_row = mysqli_fetch_assoc($query_run)){
              $day = $query_row['day'];
              $month = $query_row['month'];
              $year = $query_row['year'];
              $desc = $query_row['description'];
              $pic = $query_row['file'];                
      
      }
    }
  ?>


<?php
$id  = $_GET['id'];
 if(isset($_POST['day'])&& isset($_POST['month'])&& isset($_POST['year'])&& isset($_POST['description'])&& isset($_FILES['file'])){
  
  
      $day = $_POST['day'];
      $month = $_POST['month'];
      $year = $_POST['year'];
      $desc = $_POST['description'];
      $pic = $_FILES['file'];     

      $type = $_FILES['file']['type'];
      $fileSize = $_FILES['file']['size'];     
      $tmp_name = $_FILES['file']['tmp_name'];

       if(!empty($_FILES['file']["name"])){
      
          $tmp_file = $_FILES['file']['tmp_name'];
          $target_file= basename($_FILES['file'] ['name']);
          $upload_dir = "recentFiles/";

            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                            

         $query = "UPDATE recentwork SET day= '".$day."',month= '".$month."',year = '".$year."',description = '".$desc."', file = '".$target_file."' WHERE id=$id";
            $result = mysqli_query($connection, $query);
            if(!$result){
              echo ("Query Failed" . mysqli_error($connection));exit;
            }else{               
              $_SESSION['alert'] ='<div class="alert alert-success">Post updated successfully.</div>';
              header('Location:manageRecent.php');
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
            <a class="navbar-brand" href="#">Update Recent Work</a>
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
                        <div class="card-header card-header-rose card-header-icon">
                          <div class="card-icon">
                            <i class="material-icons">arrow_upward</i>
                          </div>
                          <h4 class="card-title">Recent Work Form</h4>
                        </div>
                        <div class="card-body ">
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">Day*</label>
                            <input type="text" name="day" class="form-control" id="" value="<?php echo $day;?>"> 
                          </div>
                          <div class="form-group">
                            <label for="" class="bmd-label-floating">Month*</label>
                            <input type="text" name="month" class="form-control" id="" value="<?php echo $month;?>"> 
                          </div>
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Year*</label>
                            <input type="text" name="year" class="form-control" id="" required="true" value="<?php echo $year;?>"> 
                          </div>
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Description*</label>
                            <input type="text" name="description" class="form-control" id=""value="<?php echo $desc;?>"> 
                          </div>     
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Upload File*</label>

                          </div>
                           <input type="file" name="file" class="form-control" id="" ><br>                         
                          <button type="submit" name="submit" class="btn btn-rose">Update</button>
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
