<?php 
include_once "../src/database/config.php";
ini_set("diplay_error",true);
error_reporting(E_ALL);

$id = $_GET["id"];
$connection = newConnection();
$sql = "DELETE FROM `tbforms` WHERE `id`=?";
$delete = $connection->prepare($sql);
$delete->bind_param("i",$id);
if ($delete->execute()) {
    echo "
        <script>
            
            alert('Dados deletados com sucesso !'); 
            window.location = 'result.php?search=';
        
        </script>";

}else{
    echo "Não deletado: {$delete->error}<br>";
}
    $delete->close();
?>
