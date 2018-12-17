<?php
session_start();
include("setting.php");
$codigo = $_GET['tag'];
$foto = $codigo;
$query = mysqli_query($mysqli, "SELECT * FROM imagens WHERE nomeimagem LIKE '$foto'") or die( mysqli_error($mysqli));
    $row = mysqli_fetch_assoc($query);
    $total = mysqli_num_rows($query);
    if($total > 0) {
		do {
          $delete = mysqli_query($mysqli, "DELETE FROM imovel WHERE tag = '$foto'")or die("erro ao deletar imovel");
            unlink("imagens/".$foto.$row['numero'].".jpg")or die ("verifique se o imovel foi excluido, caso não foi contacte o seu tecnico");
          $deleta = mysqli_query($mysqli, "DELETE FROM imagens WHERE nomeimagem = '$foto'")or die("erro ao deletar imagem");
        }while($row = mysqli_fetch_assoc($query));
        echo"...";
        }
   echo 'imovel com a tag '.$foto.' Excluída com Sucesso!';
   echo '<a href="gerenciaimovel.php">clique aqui para retornar ao gerenciador de imóveis</a>';

?>