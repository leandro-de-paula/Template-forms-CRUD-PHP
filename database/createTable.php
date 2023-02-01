<?php
require_once "config.php";

ini_set("display_error",true);
error_reporting(E_ALL);

$connection = newConnection();
$sql = "CREATE TABLE IF NOT EXISTS tbforms(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100),
            email VARCHAR(100),
            address VARCHAR(250)
        )";
$result = $connection->query($sql);

if ($result) {
    echo "<script>
            alert('Table Successfully Created ;)'); 
         </script>";
    echo "Table Successfully Created ;)";
} else {
    echo "Error: " . $connection->error;
}
$connection->close();
