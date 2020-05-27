<!-- 
    Archive: videoseek.php
    Type: PHP
    Description: This page is a Diplayable page that the user can seek any VIDEO from the API
    Author: Vinícius Lessa / Anderson Nascimento
    Since: 2020/05/21
-->

<?php
    // Página de Consumo da API
    include "seekdata.php";

    // Retorno
    $jSonRet    = VarResult();

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
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        
        <!-- CSS padrão -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- SCRIPTS -->
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
        <div class="container mt-2 mb-5">
            <div class="main">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <div class="d-flex justify-content-end">
                            <a href="index.php">
                                <h2 style="cursor: pointer;" class="bg-dark text-white p-2 pr-3 pl-3 rounded text-decoration-none">
                                    <b>PIXABAY - <span style="font-family: 'Sofia';" class="font-italic">API</span>
                                    </b>
                                </h2>
                            </a>
                        </div>  
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- FORM THAT MAKE A REQUIRE TO DATABASE -->
                        <form method="post" action="." class="form-check">
                            <div class="form-group">
                                <label class="letra">O que deseja Ver ?</label>
                                <input type="text" name="search" class="form-control" id="" placeholder="Imagens de New York" required>
                                
                                <h6 class="mt-2 mb-2 form-text text-muted letra2">Encontre o que quiser</h6>
                                
                                <!-- Tipo de Dado -->
                                <!--<div class="row mt-3">
                                    <div class="col-2">
                                  <span class="d-block l">Tipo de Busca:</span>
                                    </div>
                                </div>-->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center">
                                            <div class="m-3">
                                                <input type="checkbox" id="imagem" name="tipo" value="imagem" class="mr-2">
                                                <label class="h5" for="imagem">Imagens</label>  
                                                <svg class="bi bi-card-image" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                    <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V13h-14v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                                    <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                                </svg>
                                            </div>

                                            <div class="m-3">
                                                <input type="checkbox" id="video" name="tipo" value="video" class="mr-2">
                                                <label class="h5" for="video">Vídeos</label>
                                                <svg class="bi bi-camera-video-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.667 3h6.666C10.253 3 11 3.746 11 4.667v6.666c0 .92-.746 1.667-1.667 1.667H2.667C1.747 13 1 12.254 1 11.333V4.667C1 3.747 1.746 3 2.667 3z"/>
                                                    <path d="M7.404 8.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V4.308c0-.63-.693-1.01-1.233-.696L7.404 7.304a.802.802 0 0 0 0 1.393z"/>
                                                </svg>                                            
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <div id="alert" class="alert alert-danger" role="alert">                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">                        
                                <button onClick="ValidateForm(this.form)" id='clickme' type="submit" name="Buscar" class="btn btn-primary btn-lg btn-block m-1 input-bot" value="Buscar">
                                    Buscar <i class="fa fa-search ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <hr class="ml-3">
                <article class='mb-3'>              
                    <div class="row mt-3">
                        <?php
                            if (isset($_POST["search"]) && !Empty($jSonRet)){
                                
                                $aResult = json_decode(json_encode($jSonRet->hits), true)   ; // Trasnforma em Array
                                $nCont   = 0                                                ;
                                
                                // DIV Principal
                                echo " <div class='container ml-3'> ";

                                    // Resultados em Números
                                    echo "<div class='row mb-2'>
                                            <div class='col-12'>
                                                <span>
                                                    Resultados: ". $jSonRet->total . " 
                                                <span>
                                            </div>
                                         </div>";
                                    
                                    // Exibição de Resultados
                                    if(isset($_POST["tipo"])){
                                        $type       = $_POST["tipo"];
                                            if ($type == "video") {
                                                echo "<div class='row'>
                                                        <div class='col-12 rounded-right' style='background-color: black;'>
                                                            <div class='row'>";
                                                    foreach($aResult as &$Value){
                                                        echo "  <div class='col-6 pl-4 pr-4'>
                                                                    <div class='row border-top rounded h-100 mt-3 mb-3'>
                                                                        <div class='col-12 mt-4 ml-1 mr-1'>                     
                                                                        <h4 class='mb-2 text-white'>TAGS: " . $Value["tags"] ."</h4>
                                                                        <div class='delay embed-responsive embed-responsive-16by9'>
                                                                                <iframe width='853' height='480' src=".$Value["videos"]["small"]["url"]." frameborder='0' allow='accelerometer; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                                                            </div>
                                                                            <div class='col-12 mt-2'>
                                                                                <span class='d-block text-light '>Tipo: " . $Value["type"] ."</span>
                                                                                <span class='d-block text-light '>id: " . $Value["id"] ."</span>
                                                                                <span class='d-block text-light '>Duração: ".$Value["duration"]." segundos</span>
                                                                                <span class='d-block text-light '>Link: <a href='".$Value["pageURL"]."'>Visitar Link Original</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>";
                                                        unset($obj);
                                                    }
                                                } elseif ($type == "imagem") {
                                                    echo "<div class='row'>
                                                            <div class='col-12 border-info rounded-right' style='background-color: white;'>
                                                                <div class='row'>";                                                    
                                                    foreach($aResult as &$Value){
                                                        $vartest = "Tipo: " . $Value["type"] . " <br> id: " . $Value["id"] ." ";
                                                        //$obj = (object) $Value;
                                                        echo "  <div class='col-6 pl-4 pr-4'>
                                                                    <div class='row border-top rounded h-100 mt-3 mb-3'>
                                                                        
                                                                        <h4 class='m-2 mt-3'><b class='rounded text-white' style='background-color: MediumAquamarine;'>TAGS:</b> " . $Value["tags"] ."</h4>
                                                                        
                                                                        <div class='col-12 delay'>
                                                                            <a target='_blank' href='".$Value["pageURL"]."'><img id='myImg' src=".$Value["webformatURL"]." alt='".$Value["tags"]."' class='img-fluid rounded hover'/></a>
                                                                        </div>

                                                                        <div class='col-12 hidedata'>
                                                                            <div class='card-header h5'>
                                                                                Informações
                                                                            </div>
                                                                            <div class='card-body text-primary p-2 mb-2 mt-2'>
                                                                                <div class='mt-2 mb-2'>
                                                                                    <p class='card-text d-block h6'><b>Tags</b>:
                                                                                        <span class='h6'>
                                                                                            ".$Value["tags"] ."
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class='mt-2 mb-2'>
                                                                                    <p class='card-text d-block h6'><b>Tipo</b>:
                                                                                        <span class='h6'>
                                                                                            ".$Value["type"] ."
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class='mt-2 mb-2'>
                                                                                    <p class='card-text d-block h6'><b>Usuário</b>:
                                                                                        <span class='h6'>
                                                                                            ".$Value["user"] ."
                                                                                        </span>
                                                                                    </p>
                                                                                </div>

                                                                                <b class='border rounded p-1' style='background-color:DodgerBlue;'><a href='".$Value["pageURL"]."' target='_blank'><span class='text-white'>Visite a Página Original</span></a></b>
                                                                            </div>
                                                                        </div>
                                                                    </div>    
                                                                </div>";                                                        
                                                        // echo "<pre>" . print_r($Value) . "</pre>";
                                                        unset($obj);
                                                    }
                                                }
                                            }
                                            echo "</div>";  
                                            
                                            unset($Value);
                                    echo "  </div>
                                        </div>";

                                    // json
                                    // echo "<div class='row'>
                                    //         <div class='col-12 bg-info'>
                                    //             <pre>";
                                    //                var_dump($jSonRet);
                                    // echo "      </pre>
                                    //         <div>
                                    //     </div>";

                                echo " </div> ";
                            } elseif (isset($_POST["search"]) && Empty($jSonRet)) {
                                echo " <div class='container ml-5 mr-5'> ";

                                // Resultados em Números
                                echo "<div class='row mb-2'>
                                        <div class='col-12'>
                                            <span>
                                                Sory, We're Out for now. Come back Soon!
                                            </span>
                                        </div>
                                      </div>";
                            }
                        ?>         
                    </div>
                </article>
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