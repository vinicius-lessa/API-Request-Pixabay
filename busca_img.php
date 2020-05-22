<?php

Function VarResult(){

    $toSeek = "";

    if(isset($_POST["search"])){
        $toSeek = $_POST["search"];
    }

    $token="16663056-351e723be15750d1cc90b4fcd";
    
    $url ="https://pixabay.com/api/?key={$token}&q={$toSeek}&image_type=photo";

    return $retVar = RequireData($url);
}

Function RequireData($link){

    $result = json_decode(file_get_contents($link));
    
    return $result;
}    

?>