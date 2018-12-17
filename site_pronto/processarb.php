<?php
session_start();
include("setting.php");
$tag = $_SESSION['nome'];
$tipo = $_POST['tipoo'];
$bairro = $_POST['bairroo'];
if($bairro == ""){
    header("Location:error.php");
}else{
$cidade = $_POST['cidadee'];
}if($cidade == ""){
    header("Location:error.php");
}else{
$cond = $_POST['condd'];
}if($cond == ""){
    header("Location:error.php");
}else{
$obs = $_POST['obss'];
}if($obs == ""){
    header("Location:error.php");
}else{
$valor = $_POST['valoor'];
}if($valor == ""){
    header("Location:error.php");
}else{
$dorm = $_POST['dormm'];    
$pretende = $_POST['pretende'];
$valorcond= $_POST['valorcond'];
$areat= $_POST['areat'];
$areac= $_POST['areac'];
$vagas= $_POST['vagas'];
$_SESSION['nome'] = $tag;

mysqli_query($mysqli, "INSERT INTO imovel VALUES (NULL, '$tag', '$tipo', '$bairro', '$cidade', '$pretende', '$rua', '$dorm', '$cond', '$obs', '$valor', '$valorcond', '$areat', '$areac', '$vagas')") or die (header("Location:error.php"));
mysqli_close($mysqli);
}
$_SESSION['nome'] = $tag;
header("Location:imagens.php")

?>




