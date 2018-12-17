<?php
session_start();

$status = $_SESSION['login'];
if($status != "ok")
		{	
			header("location: index.php");
		}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
        <style>
        div.bemvindo{
        background-color:#EDEDED;
        margin-left:200px;
        margin-right:200px;
        padding-left:10px;
        padding-right:20px;
        box-shadow: 2px 2px 2px rgba(200, 200, 200, 200);
        border-radius:5px;
        }
        p{
    font:1.1em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: #000000;
    
    }
    p.branco{
    font:1.1em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color:red;
    
    }
    .fim{
    background-color:darkblue;
}
ul.koe{
    list-style:none;
    opacity:0.9;	
    }
        a.koe{ 
        text-decoration:none;
        padding-left:4%;
        font:1.1em"Ubuntu",sans-serif!important;
        color:white; 
        }
        a:link.koe{
        color: none;
        }
        a:visited.koe{
        color: none;
        }
        a:hover.koe{
        color: orange;
        }
        a:active.koe{
        color: none;
        }
        p.koe{
            font:1.0em"Ubuntu",sans-serif !important;
            color: #EDEDED;
            margin-right:20%;
            margin-left:20%;
            }
        footer{
            margin:0;
            padding:0;
        }
        </style>
    </head>
    <?php
    include("adminsetor.php");
    ?>
 <body>
 <center>
    <div class="bemvindo">
    <p>Bem vindo a área de cadastro</p> 
    <p>antes de prosseguir escolha a tag do seu imóvel, lembrando que essa tag precisa
    ser unica e não ter espaçamento</p> 
    <p>e é importante que você tenha ela salva pois é ela que diferenciará seu imovel dentre todos!!
    verifique para ver se existe alguma tag igual antes de continuar!!</P>
    </div>
    <div>
        <form method="post" enctype="multipart/form-data" action="processar.php">
            <div class="bemvindo">
                <label><p class="branco">Tag do imovel</p></label>
                <p><input type="text" name="nome" id="nome" placeholder="ex:hotelamericana"></p>
                <p>verifique se a tag é existente aqui</p>
                <input type="submit" value="Verificar"/>
            </div>
        </form>
    </div>
 </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 </body>

 <html>           
            
            
            
            
