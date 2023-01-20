<?php

      $servidor = "localhost";
// localhost tambem é web
      $dbname = "forms";
// nome do banco
      $dbusuario = "root";
// usuário do banco
      $dbsenha = "";
// senha usuário do banco

      $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

if (!$conn) {
    die("Conexao falhou: " . mysqli_connect_error());
}
?>
 <script>
      console.log('¬¨config.php loaded');
</script>
