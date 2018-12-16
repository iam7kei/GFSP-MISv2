<?php
    include "../../databaseConn.php";
    $maintenanceID = $_POST['maintenanceID'];    
    $sql = "SELECT * FROM transactions_maintenance-items WHERE maintenanceID='$maintenanceID'";
    $result = $conn->query($sql);   
 
    $sql = "DELETE FROM `transactions_maintenance-items` WHERE `maintenanceID` = '$maintenanceID'";
    $result = $conn->query($sql);        
    header('Location: ../../../pages/transactions/maintenance.php');
?>