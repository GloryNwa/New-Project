 <?php include("includes/header.php");?>
<!-- content -->
<section id="content">
  <div class="bg-top">
    <div class="bg-top-2">
      <div class="bg">
        <div class="bg-top-shadow">
          <div class="main">
            <div class="box">
              <div class="padding">


                <div class="container_12">
                  <div class="wrapper">
                    <div class="grid_12">


                      <div class="indent-left p2">
                        <h3 class="p0">What Our Client are Saying About Us</h3>
                      </div><br>
                      <div class="wrapper p4">
                      <?php
                              $query ="SELECT * FROM testimony ORDER BY id DESC LIMIT 6";
                              if ($sql = mysqli_query($connection,$query)) {
                                  while($query_row = mysqli_fetch_assoc($sql)){
                            
                                    $desc = $query_row['descriptions'];
                                    $name = $query_row['name'];
                                    $post = $query_row['post'];   
                                    $company = $query_row['company'];              
                            ?>
                        <article class="grid_4 alpha">
                          <div class="indent-left">
                         
                           
                            <p class=" prev-indent-bot"><?php echo $desc;?></p>
                            <h5>Name:  <?php echo $name;?></h5>
                            <h5>Position: <?php echo $post;?></p>
                            <b>Company: </b><?php echo $company;?>
                           
                       </div>
                        </article>

                        <?php
                              }

                            }
                          ?>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("includes/footer2.php");?>