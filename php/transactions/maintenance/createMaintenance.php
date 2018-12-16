<?php
    include "../../databaseConn.php";
    $clientName = $_POST['clientName'];
    $date = $_POST['selectedDate'];

    $sql = "INSERT INTO `transactions_maintenance` (`maintenanceID`, `maintenanceClientName`, `maintenanceDate`) VALUES ('', '$clientName', '$date')";
    $result = $conn->query($sql);
    header('Location: ../../../pages/transactions/maintenance.php');
        
?>