
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
         $query = "SELECT price, picture, description FROM sales WHERE `id`='$id'";
          if ($query_run = mysqli_query($connection,$query)) {
          while($query_row = mysqli_fetch_assoc($query_run)){
             
              $price = $query_row['price'];
              $desc = $query_row['description'];
              $pic = $query_row['picture'];                
      
      }
    }
  ?>


<?php
$id  = $_GET['id'];
 if(isset($_POST['price'])&&isset($_POST['desc']) &&isset($_FILES['file'])){
  // echo "string";exit;
      $price = $_POST['price'];
      $desc = $_POST['desc'];
      $file = $_FILES['file'];

      $type = $_FILES['file']['type'];
      $fileSize = $_FILES['file']['size'];     
      $tmp_name = $_FILES['file']['tmp_name'];

       if(!empty($_FILES['file']["name"])){
      
          $tmp_file = $_FILES['file']['tmp_name'];
          $target_file= basename($_FILES['file'] ['name']);
          $upload_dir = "newArrivalsFiles/";

            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                            

         $query = "UPDATE sales SET description ='".$desc."', price='".$price."', picture='".$target_file."' WHERE id= $id";
            $result = mysqli_query($connection, $query);
            if(!$result){
              echo ("Query Failed" . mysqli_error($connection));exit;
            }else{               
              $_SESSION['alert'] ='<div class="alert alert-success">Post updated successfully.</div>';
              header('Location:allOrders.php');
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
            <a class="navbar-brand" href="#">Update New Arrivals</a>
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
                          <h4 class="card-title">Edit Orders</h4>
                        </div>
                        <div class="card-body ">
                        
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Year*</label>
                            <input type="text" name="price" class="form-control" id="" required="true"  value="<?php echo $price;?>"> 
                          </div>
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Description*</label>
                            <input type="text" name="desc" class="form-control" id="" required="true" value="<?php echo $desc;?>"> 
                          </div>     
                           <div class="form-group">
                            <label for="" class="bmd-label-floating">Upload File*</label>
                           
                          </div>
                           <input type="file" name="file" class="form-control" id=""><br>                         
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
