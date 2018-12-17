
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
        body {
        padding: 0 0;
        margin: 0 0;
        }
        div.blocao{
        weight:100%;
        height:100px;
        background-color: rgba(0, 0, 100, 0.8);
        }
        div.bloco{
        position:relative;
        weight:100%;    
        background-color: rgba(5, 5, 200, 0.8);
        }
        ul.nav{
        list-style:none;
        opacity:0.9;	
        }
        li.pr{
        display:inline;
        }
        a.man{ 
        text-decoration:none;
        padding-left:70px;
        font:1.1em"Ubuntu",sans-serif!important;
        color:white; 
        }
        a:link.man {
        color: none;
        }
        a:visited.man {
        color: none;
        }
        a:hover.man {
        color: orange;
        }
        a:active.man {
        color: none;
        }
        img.ue{
        margin-left:7.291666666666667%;
        height:80.125%;
        margin-top:1.041666666666667%;   
        }
        
    </style>
    </head>
        <body>
        <div class="blocao">
        <img src="imagemcss/A.png" class="ue">
        </div>
            <div class="bloco">
                    <li class="pr"><a href="tag.php" class="man">Cadastrar</a></li>
                    <li class="pr"><a href="gerenciaimovel.php" class="man">Gerenciar Imóveis</a></li>
                    <li class="pr"><a href="destaque.php"class="man">Destaques</a></li>
                    <li class="pr"><a href="houme.php" class="man">inicio</a></li>
        </div>
           <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </body>

</html>