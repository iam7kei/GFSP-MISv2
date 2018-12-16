<?php
    session_start(); 
    include '../databaseConn.php';
    $username = $_POST['username'];
    $userOwner = $_POST['userOwner'];
    $password= $_POST['password'];    
    $sql = "INSERT INTO users (username, password, userOwner) values ('$username','$password','$userOwner')";
    $result = $conn->query($sql);
    header('Location: ../../pages/settings/user-accounts.php');
?>