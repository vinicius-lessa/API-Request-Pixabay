<!-- 
    Archive: videoseek.php
    Type: PHP
    Description: This page is a Diplayable page that the user can seek any VIDEO from the API
    Author: Vinícius Lessa / Anderson Nascimento
    Since: 2020/05/21
-->

<?php
    // videoseek.php
    include "busca_video.php";

?>
                      
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
            <div class="main">
                <div class="row">
                    <div class="col-12 text-center mt-4">

                        <h2><strong>PIXABAY</strong></h2>
                        <h3>Encontre !</h3>
                      
                    </div>
                </div>

                <!-- FORM THAT MAKE A REQUIRE TO DATABASE -->                
                <form method="post" action="." class="ml-5 mr-5 mb-0">
                    <div class="form-group">
                        <label class="letra">O que deseja Ver ?</label>
                        <input type="text" name="search" class="form-control" id="" placeholder="Imagens de New York" required>
                        
                        <small id="" class="form-text text-muted letra2">Encontre o que quiser</small>
                    </div>
                    <div class="row">                        
                        <input type="submit" name="Buscar" class="btn btn-primary btn-lg btn-block m-1 input-bot" value="Buscar">
                    </div>
                </form>
                <article class='mb-3'>                
                    <div class="row">
                        <div class="col mt-4 ml-2 mr-2">
                            <hr class="bg-black">
                            <h3 class="text-center mt-5 mb-4 letra"><strong>...</strong></h3>
                        </div>                    
                    </div>                    
                    <div class="row">                    
                        <div class='col-12 mb-4'>
                        </div>
                    </div>
                </article>
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