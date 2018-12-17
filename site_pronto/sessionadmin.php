<?php
session_start();
include("setting.php");
	$usuario = $_POST['usuario'];
	$senha  = $_POST['senha'];
	$query = mysqli_query($mysqli,  "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'")or die("erro não foi possivel achar seu usuario");			
    $row = mysqli_fetch_array($query);
    $total  = mysqli_num_rows($query);
    $id = $row["usuario"];
	$nome = $row["senha"];
	if($total == 0){
	echo "<h1>DADOS INCORRETOS</h1>";
	}else{
        do{		
		$_SESSION['user'] = $usuario;
        $_SESSION['login'] = "ok";
		header("Location:gerenciaimovel.php");	
    }while($rows = mysqli_fetch_array($query));
    echo'.';
}		
?>