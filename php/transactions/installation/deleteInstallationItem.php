<?php
    include "../../databaseConn.php";
    $installationID = $_POST['installationID'];
    $installationItemID = $_POST['installationItemID'];
    $sql = "SELECT * FROM transactions_installation-items WHERE installationItemID='$installationItemID'";
    $result = $conn->query($sql);
     
    $sql = "DELETE FROM `transactions_installation-items` WHERE `installationItemID` = '$installationItemID'";
    $result = $conn->query($sql);
    header('Location: ../../../pages/transactions/installation.php');
?>