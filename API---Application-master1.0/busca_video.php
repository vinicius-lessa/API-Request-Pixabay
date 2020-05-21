<?php

$nome="";

if(isset($_POST["nome"])){
 $nome=$_POST["nome"];
  
}
$token="16663056-351e723be15750d1cc90b4fcd";
$url ="https://pixabay.com/api/videos/?key={$token}&q={$nome}";
$result= json_decode(file_get_contents($url));
print_r($result);


?>