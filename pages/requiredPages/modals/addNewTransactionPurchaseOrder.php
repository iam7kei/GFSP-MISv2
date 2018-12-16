<?php
     require '../../php/databaseConn.php';
     
?>

<div class="modal fade" id="addNewTransactionPurchase" role="dialog" style="width: 100%;">
        <div class="modal-dialog" style="max-width: 400px;">
            <!-- Modal content-->
            <form action="../../php/transactions/purchase/createPurchaseOrder.php" method="post" method="post" onsubmit="return confirm('Create Purchase Order?');" >
            <div class="modal-content">
            <div class="modal-header">
                <h5>New Purchase</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>                                           
            <div class="modal-body">                                         
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-sm-12">
                    <label>
                         Supplier
                    </label>
                    <select class="form-control" name="supplierName">
                    <?php
                        $query = $conn->query("SELECT * FROM `suppliers`") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                    ?>
                        <option value="<?php echo $fetch['supplierName']?>"> <?php echo $fetch['supplierName']?></option>
                    <?php
                        }
                    ?>
                </select>
                    </div>                    
                </div>
                <div class="row" >
                    <div class="col-sm-12">
                        <label>Payment Term</label>
                        <select class="form-control" name="paymentTerm">
                            <option>Cash</option>
                            <option>Cheque</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">     
                <!-- <input type="hidden" value="" name="date"> -->
                <input type="submit" class="btn btn-default" style="width: 90px;" value="Create">                
                <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
            </div>                                          
            </div>   
            </form>
    </div>
</div>
<?php     
     $conn->close();
?>