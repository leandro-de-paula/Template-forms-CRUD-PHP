<?php include_once "../database/config.php";?>
 
    <?php 
        $id = $_GET["id"];
        mysqli_select_db($conn,$dbname);
        
        $sql = "DELETE FROM `tbforms` WHERE `id`='$id'";
        
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    
                    alert('Dados deletados com sucesso !'); 
                    window.location = 'result.php?search=';
                
                </script>";

        }else{
            echo "Não deletado " . $sql . "<br>" . mysqli_error($conn);
        }
            mysqli_close($conn);
        ?>
