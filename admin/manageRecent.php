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
            <a class="navbar-brand" href="#pablo">Recent Works</a>
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
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">Manage Recent Work</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                   <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                           }

                       ?>
                    <table id="datatables" class="table table-bordered table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Day</th> 
                          <th>Month</th>                        
                          <th>Year</th>
                          <th>Description</th>
                          <th>Picture</th>
                          <th class="">Actions</th>                      
                      </tr>
                      </thead>
                      <tbody>
                        <?php $sql = "SELECT * FROM recentwork ORDER BY id DESC";
                             $x = 1;
                             if ($query_run = mysqli_query($connection,$sql)) {
                             
                             while($query_row = mysqli_fetch_assoc($query_run)){
                              $day = $query_row['day'];
                              $desc = $query_row['description'];
                              $year = $query_row['year'];
                              $pic = $query_row['file'];
                              $month = $query_row['month'];
                              $id = $query_row['id'];

                        ?>
                         <tr>
                          <td><?php echo $x++;?></td>
                          <td><?php echo $day;?></td>
                          <td><?php echo $month;?></td>
                          <td><?php echo $year;?></td>
                          <td><?php echo $desc;?></td>
                          <td><img src='<?php echo "recentFiles/" .$pic;?>' alt="" width="150px" hieght="150px" /></td>
                           <td class="text-right">
                             <ul class="nav nav-pills">
                              <li role="presentation">
                               <a href="editRecentWork.php?id=<?php echo $query_row['id']; ?>">
                                <span class="fa fa-pencil" style="color:#009efb;"><button class="btn btn-success btn-xs" style="background-color:#009efb;">Edit</button></span>  
                               </a>
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <li role="presentation">
                                <a  href='deleteRecentWork.php?id=<?php echo $query_row['id']; ?>'onclick='return confirm("Are you really sure?")'>
                                 <span class="fa fa-trash" ><button class="btn btn-danger btn-xs">Delete</button></span> 
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
