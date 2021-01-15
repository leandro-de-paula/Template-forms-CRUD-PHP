<?php

      $servidor = "localhost";
// localhost tambem é web
      $dbname = "form";
// nome do banco
      $dbusuario = "root";
// usuário do banco
      $dbsenha = "root";
// senha usuário do banco

      $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

if (!$conn) {
    die("Conexao falhou: " . mysqli_connect_error());
}
?>
 <script>
      console.log('¬¨config.php loaded');
</script>
