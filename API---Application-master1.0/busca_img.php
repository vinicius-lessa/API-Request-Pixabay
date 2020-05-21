<?php
$nome="";

if(isset($_POST["nome"])){
 $nome=$_POST["nome"];
  
}
$token="16663056-351e723be15750d1cc90b4fcd";
$url ="https://pixabay.com/api/?key={$token}&q={$nome}&image_type=photo";
$result= json_decode(file_get_contents($url));
print_r ($result);
?>