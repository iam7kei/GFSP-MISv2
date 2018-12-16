<div class="modal fade" id="addNewEmployee" role="dialog" style="width: 600px; top: 20%;left: 35%;">
    <div class="modal-dialog">
            <!-- Modal content-->
            <form action="../../php/masterfiles/employee/addEmployee.php" method="post">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Employee</h4>               
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>                                       
            <div class="modal-body">                                         
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">                                                     
                    <tr>
                    <td>
                            Name
                    </td>
                    <td>
                        <input type="text" class="form-control input-sm" aria-controls="dataTables-example" name="employeeName">
                    </td>    
                    </tr>
                    <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="text" class="form-control input-sm" name="employeeEmail">
                    </td>    
                    </tr>                                           
                    <tr>
                    <td>
                        Contact No.
                    </td>
                    <td>
                        <input type="text" class="form-control input-sm" name="employeeContactNo">
                    </td>    
                    </tr>                                              
                    <tr>
                    <td>
                        Employee Address
                    </td>
                    <td>
                        <input type="text" class="form-control input-sm" name="employeeAddress">
                    </td>    
                    </tr>                                         
                    <tr>
                    <td>
                        Position
                    </td>
                    <td>
                        <select style="padding: 3px;" class="form-control" name="employeePosition">
                            <option value="Account Executive">ACCOUNT EXECUTIVE</option>
                            <option value="Secretary">SECRETARY</option>
                            <option value="Technician">TECHNICIAN</option>
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