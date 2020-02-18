<?php
    $dsn = 'localhost';
    $username = 'root';
    $password = '';
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>