<?php include_once "../database/config.php";?>
 
    <?php 
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        
        mysqli_select_db($conn,'$dbname');
        
        $sql = "UPDATE `tbform` SET `name`='$name',`email`='$email',`address`='$address' WHERE `id`='$id'";

        echo "
                <script>
                    console.log('.json_eencode($address)');
                </script>";
        
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    
                    alert('Salvo com Sucesso !'); 
                    window.location = 'result.php?search=$name';
                
                </script>";

        }else{
            echo "Não foi atualizado: " . $sql . "<br>" . mysqli_error($conn);
        }
            mysqli_close($conn);
        ?>
