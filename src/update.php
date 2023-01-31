<?php include_once "../database/config.php";?>
 
    <?php 
    ini_set("display_errors", true);
    error_reporting(E_ALL);

        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        $params = [
            $name,
            $email,
            $address,
            $id
        ];

        $connection = newConnection();
        $sql = "UPDATE `tbforms` SET `name`= ?,`email`= ?,`address`= ? WHERE `id`= ?";
        $update = $connection->prepare($sql);
        $update->bind_param("sssi",...$params);
        
        if ($update->execute()) {
            echo "
                <script>
                    
                    alert('Salvo com Sucesso !'); 
                    window.location = 'result.php?search=$name';
                
                </script>";

        }else{
            echo "Não foi atualizado: " . $update->error . "<br>" ;
        }
            $update->close();
        ?>
