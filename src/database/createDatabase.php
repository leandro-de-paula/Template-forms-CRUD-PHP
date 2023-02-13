<?php
require_once "../database/config.php";
ini_set("display_error", true);
error_reporting(E_ALL);

$connection = newConnection();
$sql = "CREATE DATABASE IF NOT EXISTS forms";
$result = $connection->query($sql);

if ($result) {
    echo "<script>
            alert('Database Successfully Created ;)'); 
         </script>";
    echo "Database Successfully Created ;)";
} else {
    echo "Error: " . $connection->error;
}
$connection->close();