<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gibrosen Fire Safety Products MIS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <?php
    session_start();
    include "../../php/databaseConn.php";
    $installationID = $_POST['installationID'];    
  ?>
<script src="../../js/jquery.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
      require "../requiredPages/masterfileNav.php";      
    ?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-3">
            <label> installation No.</label>
                <input type="text" class="form-control" disabled value="<?php echo  $installationID?>">
            </div>  
          </div>
          <div class="row purchace-popup">
          
            <div class="col-12">                 
                <!--INSERT CODE HERE -->          
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-12">
                        <button class="btn btn-primary" style="margin-bottom: 20px;" data-toggle="modal" data-target="#addItem"><i class="menu-icon mdi mdi-plus"></i> Add Items</button>
                            <div class="table-responsive">
                                <table class="table datatable" id="walkInDataTable">
                                    <thead>
                                        <tr>                                        
                                            <th>Item Name</th>
                                            <th>Item Type</th>
                                            <th>Quantity</th>
                                            <th>Action</th>                                       
                                        </tr>
                                    </thead>
                                    <?php
                                        require '../../php/databaseConn.php';
                                        $query = $conn->query("select * from `transactions_installation-items` where `installationID` =$installationID") or die(mysqli_error());
                                        while($fetch = $query->fetch_array()){
                                    ?>    
                                    <tbody>      
                                    <td><?php echo $fetch['itemName']?></td>
                                    <td><?php echo $fetch['itemType']?></td>
                                    <td><?php echo $fetch['itemQuantity']?></td>
                                    <td style="padding: 0;"><form style="margin:0;" action="../../php/transactions/installation/deleteinstallationItem.php" method="post" onsubmit="return confirm('Are you sure you want to delete record?');" >
                                            <input type="hidden" value="<?php echo $installationID?>" name="installationID">     
                                            <input type="hidden" value="<?php echo $fetch['installationItemID']?>" name="installationItemID"> 
                                            <button type="submit" class="btn btn-icons btn-rounded btn-danger"><i class="menu-icon mdi mdi-delete"></i></button>
                                            </form></td>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                    </div>
                </div>     	
            </div>
          </div>
        </div>
        <?php

        ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
    <script>
         $(document).ready(function () {
                $('#walkInDataTable').dataTable();             
            });      
    </script>
  <!-- End custom js for this page-->
</body>
</html>