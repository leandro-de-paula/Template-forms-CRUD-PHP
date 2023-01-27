<?php 
// In development time
ini_set("display_errors", true);
error_reporting(E_ALL);

require_once "../database/config.php";


$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];

$params = [
    $name,
    $email,
    $address
];

$connection = newConnection();
$sql = "INSERT INTO tbforms (name, email, address) VALUES (?,?,?)";
$insert = $connection->prepare($sql);
$insert->bind_param("sss",...$params);
if ($insert->execute()) {
    echo "<script>
                alert('I saved your data!'); 
                window.location = '../public/index.php';
          </script>";
} else {
    echo "Error: " . $insert->error;
}
$insert->close();
?>
