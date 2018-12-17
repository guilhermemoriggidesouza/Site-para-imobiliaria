<?php
session_start();
$status = $_SESSION['login'];
$tagster=$_SESSION['nome'];
if($tagster == ""){
    header("Location:tag.php");
}elseif($status != "ok")
		{	
			header("location: index.php");
		}
?>

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
        div.pesquisar{
        background-color:#120a8f;
        float:center;
        margin-left:200px;
        margin-right:200px;
        margin-top:30px;
        order: 10px solid rgb(150, 150, 150);
        box-shadow: 5px 5px 5px rgba(200, 200, 200, 0.2);
        border-radius:5px;
    }
    p.branco{
    font:1.1em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: #EDEDED;
    
    }
    .pesquisado{
        background-color:#FFFFFF;
        margin:50px;
        padding:10px;
        order: 10px solid rgb(150, 150, 150);
        box-shadow: 2px 2px 2px rgba(200, 200, 200, 200);
        border-radius:5px;
    }
    p{
    font:1.1em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: #000000;
    
    }
    p.grande{
    font:2.0em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: #000000;
    }p.uai{
    font:1.0em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: red;
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
    <div>
    <form method="post" enctype="multipart/form-data" action="processarc.php">
        <div class="pesquisar">
            <center>
                <p class="branco">Segunda parte, escolha as imagens</p>       
                <p class="branco"><?php echo 'Nome padrao escolhido : <b>'.$tagster.'</b>';?></p>
            </div>
            <div class="bemvindo">
                <label><p>Selecione uma imagem: <input name="arquivo" type="file" /></p></label>
                <div class="pesquisado">
                <p class="uai">!importante! é necessario a escolha de um numero para identificar a imagem como unica</br > caso haja duplicidade a imagem podera ser excluida ao clicar no icone</br >a imagem numero "01"(necessariamente esse numero) será a principal, caso não tenha essa numeração não havera imagem principal.  </p>
                <label class="label-renumero"><p>numero da imagem</p></label>
                <p><input type="number" name="numero" id="numero" max ="20" placeholder="ex:01"></p>
            </div>
            <input type="submit" value="Salvar" />
        </form>
        </br >
        <a href="gerenciaimovel.php"><p>clique aqui quando ter terminado de adicionar as fotos</p><a/>
            <p class="grande"><?php echo 'Fotos adicionadas com o titulo : '.$tagster?></p>
            <table>
            <tr>
            <?php include("fotosadicionadas.php")?>
            </tr>
            </table>
            </center>
        </div>
           <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>

</html>