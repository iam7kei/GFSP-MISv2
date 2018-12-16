<?php
     require '../../php/databaseConn.php';
?>
<div class="modal fade" id="addNewUser" role="dialog" style="width:100%;">
    <div class="modal-dialog">
            <!-- Modal content-->
            <form action="../../php/settings/addUser.php" method="post">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New User</h4>               
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>                                       
            <div class="modal-body">                                         
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">                                                     
                    <tr>
                    <td>
                            Username
                    </td>
                    <td>
                        <input type="text" class="form-control input-sm" aria-controls="dataTables-example" name="username">
                    </td>    
                    </tr>
                    <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" class="form-control input-sm" name="password">
                    </td>    
                    </tr>                                           
                    <tr>
                    <td>
                        User Owner
                    </td>        
                    <td>
                    <select class="form-control" name="userOwner">
                    <?php
                        $query = $conn->query("SELECT * FROM `employees`") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                    ?>
                        <option value="<?php echo $fetch['employeeName']?>"> <?php echo $fetch['employeeName']?></option>
                       
                    <?php
                        }
                    ?>
                </select>
                    </td>              
                    </tr>                                                                  
                                          
            </table>
            </div>
            <div class="modal-footer">     
                <input type="submit" value="Add" class="btn btn-default" style="width: 90px;">
                <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>                     
            </div>
                    </form>
            </div>                                        
    </div>
</div>
<?php     
     $conn->close();
?>