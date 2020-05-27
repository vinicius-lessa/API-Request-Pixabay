
 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
    <head>
        <!-- META DADOS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>API - Pixabay</title>
        <meta name="description" content="Página de Demonstração do consumo de API do site PixaBay - Fates São Roque - 2020">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="pt-br">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
        
        <!-- CSS padrão -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- Favicon -->
        <link rel="icon" href="favicon.png">

        <!-- SCRIPTS -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="scripts/jquery.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <!--  JS - LOADING-->        
        <script type="text/javascript" src="scripts/loading-bar.js"></script>
        
        <script type="text/javascript">
        // Empty
    
        </script>
    </head>
    <body>
        <nav>        
            <!-- NAV -->
            <?php include 'includes/header.php'?>
        </nav>
        <div class="container">
            <div class="row">
                <!-- Vinícius -->
                <div class="col-12 mt-5 mb-5">
                    <div class="border rounded p-4 m-5">
                        <div class="row">
                            <div class="col-3">
                                <img tabindex="0" class="rounded-circle devimg" src="vinicius.webp" height="220" width="220" alt="Cabeça e ombros de um homem, vestindo capuz com barba no rosto, aparência entre 20, 25 anos, ao fundo uma moto e um carro">
                            </div>
                            <div class="col-9 mt-2">
                                <h2>Vinícius Lessa</h2>
                                <h5 class="font-weight-bold">Sobre:<h5>
                                <p class="text-justify">Vinícius Lessa, atualmente cursando o 4º Semestre de Sistemas para Internet na FATEC SÃO ROQUE. Apaixonado por música.</p>
                                <h5 class="font-weight-bold">Contato:</h5>
                                <p class="text-justify">E-mail: vinicius.lessa33@outlook.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Anderson -->
                    <div class="border rounded p-4 m-5">
                        <div class="row">
                            <div class="col-3">
                                <img tabindex="0" class="rounded-circle devimg" src="anderson.webp" height="220" width="220" alt="...">
                            </div>
                            <div class="col-9 mt-2">
                                <h2>Anderson Nascimento</h2>
                                <h5 class="font-weight-bold">Sobre:<h5>
                                <p class="text-justify">Anderson Nascimento, estudante 28 anos,amante de gibis,mangas,Animes,Tokusatsu.</p>
                                <h5 class="font-weight-bold">Contato:</h5>
                                <p class="text-justify">E-mail: andersoncoderweb@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        <!-- FOOTER -->
        <footer class="w-auto p-3">
			<div class="row">
				<div class="col-md-12">
					<?php include 'includes/footer.php'?>
				</div>
			</div>                
        </footer>
		<script src="scripts/script.js" async defer>
		</script>
	</body>
</html>