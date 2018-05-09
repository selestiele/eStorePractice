<?php

$dsn = 'localhost';
$username = 'root';
$password = 'Taa;2tosbt';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?>