<?php include_once "../database/config.php";?>
<html>
    <body>
    <?php 
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        $conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
        mysqli_select_db($conn,'$dbname');

        $sql = "INSERT INTO tbform (name, email, address) VALUES ('$name', '$email', '$address')";

        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    
                    alert('Salvei seus dados !'); 
                    window.location = '../public/index.php';
                
                </script>";

        }else{
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
            mysqli_close($conn);
        ?>
    </body>
</html>