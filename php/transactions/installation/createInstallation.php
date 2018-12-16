<?php
    include "../../databaseConn.php";
    $clientName = $_POST['clientName'];
    $date = $_POST['selectedDate'];
    $sql = "INSERT INTO `transactions_installation` (`installationID`, `installationClientName`, `installationDate`) VALUES ('', '$clientName', '$date')";
    $result = $conn->query($sql);
    header('Location: ../../../pages/transactions/installation.php');
?>