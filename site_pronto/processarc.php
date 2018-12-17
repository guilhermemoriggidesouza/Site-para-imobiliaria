<?php
session_start();
include("setting.php");
$nome = $_SESSION['nome'];
$destino = 'imagens/';
$numero = $_POST['numero'];
$extensao = pathinfo($_FILES['arquivo']['name'])or die("ensira uma foto");
$extensao = ".".$extensao['extension'];
$nomeru = $nome . $numero;
$imagem = $nomeru . $extensao;
$nada="";
  
move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino . $imagem)or die("ensira uma foto");

mysqli_query($mysqli, "INSERT INTO imagens VALUES ('$nome','$numero', NULL)") or die("Erro ao tentar cadastrar registro");
mysqli_close($mysqli);

header("Location: imagens.php");

?>




