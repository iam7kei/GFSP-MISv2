<?php
     require '../../php/databaseConn.php';
?>
<script>
    $(document).ready(function(){
        $("#selectDate").change(function(){
            var k = new Date(this.value);
            var month = k.getMonth()+1;
            var year = k.getFullYear();
            var day = k.getDate();
            $("#selectedDate").val(year+"-"+month+"-"+day);
        });
    });
</script>
<div class="modal fade" id="addNewTransactionMaintenance" role="dialog" style="width: 100%;">
        <div class="modal-dialog" style="max-width: 400px;">
            <!-- Modal content-->
            <form action="../../php/transactions/maintenance/createMaintenance.php" method="post" method="post" onsubmit="return confirm('Create a delivery transaction?');" >
            <div class="modal-content">
            <div class="modal-header">
                <h5>New Transaction</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>                                           
            <div class="modal-body">                                         
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-sm-12">
                    <label>
                         Client
                    </label>
                    <select class="form-control" name="clientName">
                    <?php
                        $query = $conn->query("SELECT * FROM `clients`") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                    ?>
                        <option value="<?php echo $fetch['clientName']?>"> <?php echo $fetch['clientName']?></option>
                       
                    <?php
                        }
                    ?>
                </select>
                    </div>                    
                </div>       
                <div class="row">
                    <div class="col-sm-12">                        
                        <label>Date</label>
                        <input type="date" class="form-control" id="selectDate" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">                    
                <!-- <input type="hidden" value="" name="date"> -->
                <input type="hidden" id="selectedDate" name="selectedDate">
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