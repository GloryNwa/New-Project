<?php include("db.php");?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 16:47:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Frontline Interior
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
  <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="dashboard.html" />
  <meta property="og:image" content="../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.minf066.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
         
        </a>
        <a href="#" class="simple-text logo-normal">
         FRONTLINE
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="assets/img/faces/glo.jpg">
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Admin
                <b class="caret"></b>
              </span>
            </a>
           
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <!-- <li class="nav-item" style="">
                  <a class="nav-link" href="sliderForm.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Upload Slider Image</span>
                  </a>
          </li> -->
          <li class="nav-item" style="">
                  <a class="nav-link" href="AllCustomers.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Upload All Customers Info</span>
                  </a>
          </li>
           <li class="nav-item" style="">
                  <a class="nav-link" href="companyprofile.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Upload Company Profile Image</span>
                  </a>
          </li>
           <li class="nav-item" style="">
                  <a class="nav-link" href="testimony.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Post Testimonies</span>
               </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons"></i>
              <p>Products Upload Board
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="productArchive.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Archive Form </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="productCategory.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Product Category Form</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="recentWork.php">
                    <span class="sidebar-mini"> </span>
                    <span class="sidebar-normal">Recent Work Form</span>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="newArrivals.php">
                      <span class="sidebar-mini"> </span>
                      <span class="sidebar-normal">New Arrivals Form</span>
                    </a>
                  </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons"></i>
              <p>Management Board
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
              <li class="nav-item ">
                  <a class="nav-link" href="client.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Manage All Customers and Clients</span>
                  </a>
                </li>
              <li class="nav-item ">
                  <a class="nav-link" href="allOrders.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Manage All Orders</span>
                  </a>
                </li>
               <li class="nav-item ">
                  <a class="nav-link" href="manageRecent.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Manage Recent Works</span>
                  </a>
                </li>
                  <li class="nav-item ">
                  <a class="nav-link" href="manageNewArrival.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Manage New Arrivals</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="manageP_category.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Manage Product Category</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="manageP_archive.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">Manage Product Archive</span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          <!--  -->
            <li class="nav-item" style="background-color:red">
                  <a class="nav-link" href="logout.php">
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">logout</span>
                  </a>
                </li>
                
          </li>
        
        </ul>
      </div>
    </div>