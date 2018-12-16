<?php
    include "../../databaseConn.php";
    $installationID = $_POST['installationID'];    
    $sql = "SELECT * FROM transactions_installation-items WHERE installationID='$installationID'";
    $result = $conn->query($sql);   
 
    $sql = "SELECT * FROM transactions_installation-items WHERE installationID='$installationID'";
    $sql = "DELETE FROM `transactions_delivery-items` WHERE `installationID` = '$installationID'";
    $result = $conn->query($sql);        
    header('Location: ../../../pages/transactions/installation.php');
?>