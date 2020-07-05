<?php ob_start();
session_start();
if(!isset($_SESSION['password']) || $_SESSION['password'] != 'edeywork2020') {
     echo '<h1 style="text-align:center; color: red; padding-top:80px">!!!! <br><br>Hacker go away, you are not authorised to view this page!!</h1>';?>
     <img src="assets/tt.gif" alt="" style="width:400px;margin-left:300px"></a>
 
     <?php
     die();


}

if(isset($_SERVER['HTTP_REFERER'])){
  $_SESSION['referrer']  = $_SERVER['HTTP_REFERER'];


}

?>
 <?php include("include/header.php");?>
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
            <a class="navbar-brand" href="#pablo">All Customers</a>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">person+</i>
                    </div>
                    <h4 class="card-title"> Manage Customers and Clients<br><small></small></h4></div>
                   <div class="card-body">
                    <div class="table-responsive">
                    <?php if(isset($_SESSION['allert'])){
                            echo $_SESSION['alert'];
                    unset($_SESSION['alert']);
                    }

                 ?>     
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Category</th>
                          <th class="">Actions</th>                   
                        </tr>
                      </thead>
                      <tbody>
                        <?php $sql = "SELECT * FROM clients ORDER BY id DESC";
                             $x = 1;
                             if ($query_run = mysqli_query($connection,$sql)) {
                             
                             while($query_row = mysqli_fetch_assoc($query_run)){
                             
                              $fname = $query_row['firstname'];
                              $email = $query_row['email'];
                              $phone = $query_row['phone'];
                              $address = $query_row['address'];
                              $city = $query_row['city'];
                              $state = $query_row['state'];
                              $cat = $query_row['category'];
                        

                          ?>
                         <tr>     
                          <td><?php echo $x++;?></td>
                          <td><?php echo $fname;?></td>
                          <td><?php echo $phone;?></td> 
                          <td><?php echo $email;?></td> 
                          <td><?php echo $address?></td>
                          <td><?php echo $city;?></td>
                          <td><?php echo $state;?></td> 
                          <td><?php echo $cat;?></td>             
                           <td class="text-right"  style="width:60px">
                             <ul class="nav nav-pills">

                             </li>&nbsp;&nbsp;&nbsp;
                              <li role="presentation">
                                <a  href='deleteClient.php?id=<?php echo $query_row['id']; ?>'onclick='return confirm("Are you really sure?")'>
                                <i class="material-icons">delete</i>
                                </a>
                              </li>
                            </ul>
                          </td>
                        </tr>  
                           <?php
                          }

                        }

                      ?>                     
                     </tbody>                 
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
    <?php include("include/footer.php");?>
