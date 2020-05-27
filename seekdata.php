<?php

Function VarResult(){

    $toSeek = "";

    if(isset($_POST["search"]) && isset($_POST["tipo"])){

        // Variáveis
        $toSeek     = $_POST["search"];
        $token      ="16663056-351e723be15750d1cc90b4fcd";        
        $type       = $_POST["tipo"];

        $url        = "";
        
        if ($type == "video") {
        
            $url = "https://pixabay.com/api/videos?key={$token}&q={$toSeek}&image_type=photo";
        
        } elseif (($type == "imagem")){
        
            $url ="https://pixabay.com/api/?key={$token}&q={$toSeek}";
        
        }

        if (!Empty($url)){
            return $retVar = RequireData($url);
        }
    }

    return null;
}

Function RequireData($link){

    $result = json_decode(file_get_contents($link));
    
    if (!Empty($result)) {
        return $result;
    }

    // Caso o Json volte vaizo
    return null;
}    

Function SeekVideo() {

    $result = "";

    if(isset($_POST["nome"])){
    $nome=$_POST["nome"];
    
    }

    $result= json_decode(file_get_contents($url));
    print_r($result);
}

?>