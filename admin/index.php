<?php 
include("layouts/header.php")
?>

<body class="">
 <div class="wrapper ">
  <?php include("layouts/sidebar.php") ?>
  <div class="main-panel">
   <!-- Navbar -->
   <?php include("layouts/navbar.php") ?>
   <!-- End Navbar -->
   <div class="content">
    <div class="content">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
        <!-- flash view -->
        <?php //include("layouts/flash_view.php") ?>
       </div>
      </div>
      <div class="row">
       <!-- web view -->
       <?php //include("layouts/wbe_view.php") ?>
      </div>
      <div class="row">
       <!-- visit card -->
       <?php //include("layouts/visti_card.php") ?>
      </div>
      <!-- <h3>Manage Listings</h3> -->
      <br>
      <div class="row">
       <!-- manage list -->
       <?php //include("layouts/manage_list.php") ?>
      </div>
     </div>
    </div>
   </div>
   <?php include ('layouts/footer.php'); ?>
  </div>
 </div>
 <?php include("layouts/right_sidebar.php") ?>
 <!--   Core JS Files   -->
 <?php include("layouts/script.php") ?>