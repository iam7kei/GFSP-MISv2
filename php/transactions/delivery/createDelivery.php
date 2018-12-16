<?php
    include "../../databaseConn.php";
    $clientName = $_POST['clientName'];
    $date = $_POST['selectedDate'];
    

    $query = $conn->query("SELECT * FROM `clients` where `clientName` = '$clientName'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        $clientAddress = $fetch['clientAddress'];
    }

    $sql = "INSERT INTO transactions_delivery (deliveredTo, deliveryAddress, deliveryDate) values ('$clientName','$clientAddress', '$date')";
    $result = $conn->query($sql);
    header('Location: ../../../pages/transactions/delivery.php');
        
?>