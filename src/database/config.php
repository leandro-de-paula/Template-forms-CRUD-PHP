<?php

function newConnection() {
    $envPath =  realpath(dirname(__FILE__) . "/../env.ini");
    $env = parse_ini_file($envPath);
    $server = $env['host'];
    $user = $env['username'];
    $password = $env['password'];
    $database = $env['database'];
  
    $connection = new mysqli($server, $user, $password, $database);

    if ($connection->connect_error) {
        die('Erro: ' . $connection->connect_error);
    }

    return $connection;
  }
?>
 <script>
      console.log('¬¨config.php loaded');
</script>


