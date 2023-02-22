<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Compatibilidade HTML5 IE -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

	<!-- Bootstrap Offgrid -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">

	<!-- Ionic CSS Offgrid -->
	<!-- <link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet"> -->
	<link href="../../public/iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

	<!-- FontAwesome Offgrid-->
	<!-- <link href="fontawesome/css/all.css" rel="stylesheet"> -->
	<link href="../../public/fontawesome/css/all.css" rel="stylesheet">

	<!-- Estilo customizado -->
	<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
	<link rel="stylesheet" type="text/css" href="../../public/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/login.css">

	<!-- Icone de Navegador Ex:img/favicon.png -->
	<link rel="icon"  href="">

    <title>FormsPHP</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login_card card">
            <div class="card-header" style="text-align: center;">
                <h2 class="font-weith-bold">FormsPHP</h2>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" 
                    class="form-control" 
                    placeholder="Informe seu email" autofocus>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" 
                    class="form-control" 
                    placeholder="Informe sua senha" >
            </div>
            </div>
            <div class="card-footer" style="text-align: right;">
                <button class="btn btn-lg btn-primary">Entrar</button>
            </div>        
        </div>
    </form>
</body>
</html>