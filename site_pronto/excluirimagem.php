<?php
session_start();
include("setting.php");
$nome = $_SESSION['nome'];
$codigo = $_GET['codigo'];
$foto = $nome.$codigo ;
$deleta = mysqli_query($mysqli, "DELETE FROM imagens WHERE nomeimagem = '$nome' AND numero = '$codigo'")or die("erro ao deletar");

unlink("imagens/".$foto.".jpg")or die ("erro ao excluir a imagem");

   echo 'imagem '.$codigo.' Excluída com Sucesso!';
   echo '<a href="imagens.php">clique aqui para retornar a adição de imagens</a>';

?>