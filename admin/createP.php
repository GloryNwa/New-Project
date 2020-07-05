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
            <a class="navbar-brand" href="#pablo">Create Personnel</a>
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
                    <form id="RegisterValidation" action="#" method="">
                      
                        <div class="card-header card-header-rose card-header-icon">
                          <div class="card-icon">
                            <i class="material-icons">border_color</i>
                          </div>
                          <h4 class="card-title">Create Personnel</h4>
                        </div>
                        <div class="card-body ">
                          <div class="form-group">
                            <label for="exampleEmail" class="bmd-label-floating">First Name*</label>
                            <input type="text" name="fname" class="form-control" id="exampleEmail" required="true" >
                          </div>
                          <div class="form-group">
                            <label for="examplePassword" class="bmd-label-floating">Last Name*</label>
                            <input type="text" name="lname" class="form-control" id="examplePassword" required="true" >
                          </div>
                          <div class="form-group">
                            <label for="examplePassword1" class="bmd-label-floating">Email *</label>
                            <input type="email" name="email" class="form-control" id="examplePassword1" required="true" equalTo="#examplePassword">
                          </div>
                          <div class="form-group">
                            <label for="examplePassword1" class="bmd-label-floating">Church*</label>
                            <input type="email" name="church" class="form-control" id="examplePassword1" required="true" equalTo="#examplePassword">
                          </div>
                       
                       
                        <div class="category form-category">*Access</div>

                        
                           <input type="checkbox" name="sa" value="super">Super Admin<br>
                           <input type="checkbox" name="cca" value="CallAdmin" checked> Call Center Admin<br>
                           <input type="checkbox" name="cc" value="callCenter">Call Center<br>
                           <input type="checkbox" name="sc" value="cscanner" checked> Scanner<br>
                           <input type="checkbox" name="att" value="atten"> Attendance<br>
                           <input type="checkbox" name="mb" value="mem" checked>Members<br>

                          <button type="submit" name="submit" class="btn btn-rose">Create</button>
                        </div>
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