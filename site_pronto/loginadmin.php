
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
	<style>
		.login {
    position: absolute;    
    width: 520px;
    left:50%;   
    top:50%;    
    margin: auto;
    margin-left: -260px;    
    margin-top: -250px;
}
.login form {
    padding: 22px 24px 24px;
    font-weight: normal;
    background: none repeat scroll 0% 0% rgb(255, 255, 255);
    border: 1px solid rgb(200, 200, 200);
    box-shadow: 0px 4px 10px -1px;
}
.login input {
    font-size: 24px !important;
    width: 230px;
    border: 1px solid rgb(150, 150, 150);
    background: none repeat scroll 0% 0% rgb(251, 251, 251);
    box-shadow: 1px 1px 2px rgba(200, 200, 200, 0.2);
}
.usuario-input {
    padding-left: 35px;
    margin-bottom: 10px;
    background-image:url('imagemcss/user.png') !important;;
	background-repeat:no-repeat;
}
.senha-input {
    padding-left: 35px;
    margin-bottom: 20px;
    background-image:url('imagemcss/senha.png') !important;
	background-repeat:no-repeat;
}

p{
    font:3.1em "Ubuntu",sans-serif !important;
    font-size: 555px;; 
	color: #000000;
}
b {
    font: 1.1em "Ubuntu",sans-serif !important;
    display: block;
	text-decoration: none;
	color: #000000;
}
		</style>
	</head>

	<body background="imagemcss/fundo.jpg" bgproperties="fixed">
	<center>
    </br >
        <p>SESSÃO DE ADIMINISTRAÇÃO DE IMÓVEIS</p>
            <div class="login">
            </br >
                </br >
                </br >
            </br >
		    <b>Entrar Na Pagina De Admin</b>
            </br >
		        <form action="sessionadmin.php" method="POST" enctype="multipart/form-data">	
				    <p><input type="text" name="usuario" id="usuario" placeholder="ADMIN"></p>
				    <p><input type="password" name="senha" id="senha" placeholder="SENHA DO ADMIN"></p>
				    <p><input type="submit" value="Entrar"/></p>
				<input type="hidden" name="entrar" value="login">
		</form>
		</div>
	</center>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
    
</html>
