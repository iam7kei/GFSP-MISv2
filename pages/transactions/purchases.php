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
  <script src="../../js/jquery.min.js"></script>
  <?php
    session_start();
    include "../../php/databaseConn.php";
  ?>
 
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
      require "../requiredPages/transactionsSideNav.php";      
    ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">                            
                <!--INSERT CODE HERE -->             
                <button class="btn btn-primary" data-toggle="modal" data-target="#addNewTransactionPurchase" style="margin-bottom: 20px;"><i class="menu-icon mdi mdi-account-plus"></i> Add New Transaction</button>
                <div class="table-responsive">
                    <table class="table datatable" id="walkInDataTable">
                        <thead>
                              <tr>
                                  <th>Purchase ID</th>
                                  <th>Supplier Name</th>
                                  <!-- <th>Item Name</th>
                                  <th>Item Type</th>     -->
                                  <th>Purchase Term</th>                                    
                                  <th>Date</th>
                                  <th>Action</th>                                       
                              </tr>
                        </thead>
                        <tbody>    
                        <?php
                                require '../../php/databaseConn.php';
                                $query = $conn->query("select * from `transactions_purchaseorders`") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                            ?>                                      
                                <tr>
                                    <td><?php echo $fetch['purchaseID']?></td>
                                    <td><?php echo $fetch['purchaseSupplier']?></td>
                                    <td><?php echo $fetch['purchaseTerms']?></td>
                                    <td><?php echo $fetch['purchaseDate']?></td>
                                    <td style="padding: 0;">
                                        <div class="row">
                                            <form action="purchase-addItems.php" method="POST">
                                            <input type="hidden" value="<?php echo $fetch['purchaseID']?>" name="purchaseID">                                            
                                            <button type="submit" style="margin:0;" type="button" class="btn btn-icons btn-rounded btn-success"><i class='menu-icon mdi mdi-eye'></i></button>
                                            </form>
                                            <form style="margin:0;" action="../../php/transactions/purchase/deletePurchaseOrder.php" method="post" onsubmit="return confirm('Are you sure you want to delete <?php echo $fetch['clientName']?>?');" >
                                            <input type="hidden" value="<?php echo $fetch['purchaseID']?>" name="purchaseID">
                                            <button type="submit" class="btn btn-icons btn-rounded btn-danger"><i class="menu-icon mdi mdi-delete"></i></button>
                                            </form>          
                                        </div>                                                      
                                    </td>
                                </tr>
                            <?php
                                }
                                $conn->close();
                            ?>    
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
        <?php
            include "../requiredPages/modals/addNewTransactionPurchaseOrder.php";
            include "../requiredPages/modals/editPurchaseOrder.php";
            include "../requiredPages/modals/addClientProfile.php";
            include "../requiredPages/modals/addItemsPurchaseOrder.php";
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