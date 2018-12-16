<?php
        require '../../php/databaseConn.php';
        $test = 3;
        
    ?>
<script>
    $(document).ready(function(){            
    });
</script>
    <div class="modal fade" id="addItem" role="dialog" style="width: 100%:">
        <div class="modal-dialog" style="max-width: 500px;">
            <!-- Modal content-->
            <form action="../../php/masterfiles/employee/updateEmployee.php" method="post" onsubmit="return confirm('Save the changes?');">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Items</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <label>Item Type</label>
                        <select class="form-control" id="prodType">
                            <?php
                                $query = $conn->query("SELECT DISTINCT prodType FROM `products`") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                            ?>
                                <option value="<?php echo $fetch['prodType']?>"><?php echo $fetch['prodType']?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>                   
                </div>
                <?php
                    if($test == 3){
                        ?> 
                            <div class="row">
                            <div class="col-sm-12">
                            <label>Item Name</label>
                            <select class="form-control" id="products">
                            <option id="test"></option>
                            </select>
                    </div>
                </div>
                        <?php
                    }
                ?>                
            </div>
            <div class="modal-footer">
                <input type="hidden" value="<?php echo $fetch['employeeID']?>" name="employeeID">
                <input type="submit" class="btn btn-default" style="width: 90px;" value="Save">
                <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
            </div>
            </div>
        </form>
    </div>
</div>        
