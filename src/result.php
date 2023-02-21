<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Compatibilidade HTML5 IE -->
	<!--[if lt IE 9]> 
	<script src="js/html5shiv.js"></script> 
	<![endif]-->

	<!-- Bootstrap Offgrid -->
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">

	<!-- Ionic CSS Offgrid -->
	<link href="../public/iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

	<!-- FontAwesome Offgrid-->
	<link href="../public/fontawesome/css/all.css" rel="stylesheet">
	<!-- Estilo customizado -->
	<link rel="stylesheet" type="text/css" href="../public/css/estilo.css">

	<!-- Icone de Navegador Ex:img/favicon.png -->
	<link rel="icon"  href="">

	<title>Form</title>

</head>
<body>
    
    <?php include_once "search.php";?>
    <?php include_once "../src/config/config.php";?>
    <script>
        function delete_id() {
            if (confirm("Você deseja deletar esse registro? Ao confirmar você não será possivel recuperar.")) 
                document.forms[0].submit();
             else 
             return false;
        }
    </script>
    
    <br>
    
    <h3>Pesquisa</h3>
    <table class="table table-hover">
        <thead class="table-primary">
            <th width="5%" style="text-align: left;"></a> ID</th>
            <th width="25%" style="text-align: left;">Nome</th>
            <th width="25%" style="text-align: left;">Email</th>
            <th width="25%" style="text-align: left;">Endereço</th>
            <th width="10%" style="text-align: left;">Edite/Remove</th>
        </thead>
    </table>
    
    <?php 
    ini_set("display_errors", true);
    error_reporting(E_ALL);
    $connection = newConnection();
    
    if (empty($_GET['search'])){
        $sql = "SELECT * FROM tbforms Order By name ASC limit 10";
        $result = $connection->query($sql);
    } else {
        $search = "{$_GET['search']}%";
        $sql = "SELECT * FROM tbforms WHERE name LIKE ? Order By name ASC limit 10";
        $query = $connection->prepare($sql);
        $query->bind_param("s",$search);
        $query->execute();
        $result = $query->get_result();
    }

    $account = mysqli_num_rows($result);
    
    while ($rows_names = mysqli_fetch_array($result)) {
        echo'<table class="table table-hover">
                <td width="5%" style="text-align: left;">'.$rows_names["id"].'</td>
                <td width="25%" style="text-align: left;">'.$rows_names["name"].'</td>
                <td width="25%" style="text-align: left;">'.$rows_names["email"].'</td>
                <td width="25%" style="text-align: left;">'.$rows_names["address"].'</td>
                <td width="10%" style="text-align: left;">
                    <a href="toEdit.php?id='.$rows_names["id"].'" title="toEdit" class="btn btn-outline-primary">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="deleteRecord.php?id='.$rows_names["id"].'" title="deleteRecord" onclick="return delete_id();" class="btn btn-outline-danger">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </table>
        ';
    }

    $result->close();
    ?>

<div>
    <h3>
        <strong>Total: </strong>
        <?php echo $account;?>
    </h3>
</div>
<script>
    console.log('result carregada')
</script>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>