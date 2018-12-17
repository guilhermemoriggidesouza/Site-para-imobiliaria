<?php
include("setting.php");
$tipo=(isset($_GET['tipoo']))? $_GET['tipoo'] : "";
$pretende=(isset($_GET['pretende']))? $_GET['pretende'] : "";
$bairro=(isset($_GET['bairroo']))? $_GET['bairroo'] : "";
$cidade=(isset($_GET['cidadee']))? $_GET['cidadee'] : "";
$dorm=(isset($_GET['dormm']))? $_GET['dormm'] : "";
$valor=(isset($_GET['valoor']))? $_GET['valoor'] : "";
$cond=(isset($_GET['condd']))? $_GET['condd'] : "";
$valorcond=(isset($_GET['valorcond']))? $_GET['valorcond'] : "";
$vagas=(isset($_GET['vagas']))? $_GET['vagas'] : "";
$totalreg = 12;
$pagina=(isset($_GET['pagina']))? $_GET['pagina'] : 1;
$queri = mysqli_query($mysqli, "SELECT * FROM imovel WHERE tipo LIKE '%$tipo%' AND bairro LIKE '%$bairro%' AND cidade LIKE '%$cidade%' AND pretende LIKE '%$pretende%' AND dorm LIKE '%$dorm%' AND valor LIKE '%$valor%' AND cond LIKE '%$cond%' AND valorcond LIKE '%$valorcond%' AND vagas LIKE '%$vagas%'")or die(mysqli_error($mysqli));
$totaly = mysqli_num_rows($queri);
$inicio=($totalreg*$pagina)-$totalreg;
$i=1;
$totalpag =ceil($totaly/$totalreg);
$query = mysqli_query($mysqli, "SELECT * FROM imovel WHERE tipo LIKE '%$tipo%' AND bairro LIKE '%$bairro%' AND cidade LIKE '%$cidade%' AND pretende LIKE '%$pretende%' AND dorm LIKE '%$dorm%' AND valor LIKE '%$valor%' AND cond LIKE '%$cond%' AND valorcond LIKE '%$valorcond%' AND vagas LIKE '%$vagas%' ORDER BY id desc LIMIT $inicio, $totalreg") or die(mysqli_error($mysqli));
$row = mysqli_fetch_assoc($query);
$total = mysqli_num_rows($query);
$seta = mysqli_fetch_assoc($queri);
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
      .paginao{
      width:100%;
      }
        .coluna{
      	width:25%;
        float:left;
        height:65%;
      }    
      @media only screen and (max-width:768px) {
    /* For mobile phones: */
    [class*="coluna"] {
        width: 100%;
        }
    }
        @media only screen and (min-width:768px) and (max-width:980px) {
    /* For mobile phones: */
    [class*="coluna"] {
        width: 50%;
        }
    }
    @media only screen and (min-width:980px)and (max-width:1200px) {
    /* For mobile phones: */
    [class*="coluna"] {
        width: 33%;
        }
    }
    .pesquisado{
        background-color:white;
        
        padding-bottom:10%;
        margin:5%;
    }
    p{
	color: #000000;
    
    }
    p.bairro{
	color: #000000;
    }
    p.branco{
	color: black;
    font-size:1.2em;
    }
    a{ 
    color: inherit; 
    text-decoration:none; 
    }
    .containero {
    position: relative;
}
    .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
    }

    .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    }

    .containero:hover .image {
    opacity: 0.3;
    }

    .containero:hover .middle {
    opacity: 1;
    }
    .text {
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    padding: 20px 32px;
    }
    div.dinhero{
        width:80%;
        height:20%;
        background-color:orange;
        float:left!important;
        position:absolute!important;
        border-radius:5px;
        box-shadow: 5px 5px 8px rgba(0,0,0,0.2);
        -moz-box-shadow: 5px 5px 8px 0px rgba(0,0,0,0.2);
        -webkit-box-shadow:5px 5px 8px 0px rgba(0,0,0,0.2);
    }
    .tudo{
        padding:0%;
        margin:auto;
        width:87.84773060029283%;
    }
    .tudao{
        float:left;
        width:100%;
    }.imagemacao{
        align:center;
        height:100%;
        max-height:250px;
        width:100%;
        max-width:768px;
    }
    </style>
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-lg bg-dark mb-0 navbar-dark">
            <div class="container">
                <a href="houme.php"><img src="imagemcss/A.png" class="img-fluid" style="weight:20%;height:10%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="houme.php" class="nav-link"><h5>Inicio</h5></a>
                        </li>
                        <li class="nav-item">
                            <a href="houme.php?pretende=ALUGUEL" class="nav-link"><h5>Aluguel</h5></a>
                        </li>
                        <li class="nav-item">
                            <a href="houme.php?pretende=VENDA" class="nav-link"><h5>Venda</h5></a>
                        </li>
                        <li class="nav-item">
                            <a href="loginadmin.php" class="nav-link"><h5>admin</h5></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-left">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown" id="navDrop"><h5>Redes Sociais</h5></a>
                            <div class="dropdown-menu">
                                <a href="https://www.facebook.com/joseroberto.souza.3975012" class="dropdown-item">facebook
                                <img src="imagemcss/fb.png" class="img-fluid" width="20px" height="40px"></a>
                                <a href="https://api.whatsapp.com/send?1=pt_BR&phone=55019986006306" class="dropdown-item">whatsapp
                                <img src="imagemcss/zap.png" class="img-fluid" width="38px" height="40px"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <div id="carouselAssistencia" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselAssistencia" class="active" data-slide-to="0"></li>
                    <li data-target="#carouselAssistencia" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagemcss/um.png" class="img-fluid d-block">
                    </div>
                    
                    <div class="carousel-item">
                        <img src="imagemcss/dois.png" class="img-fluid d-block">
                    </div>
                </div>

                <a href="#carouselAssistencia" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">anterior</span>
                </a>
                <a href="#carouselAssistencia" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Próximo</span>
                </a>

            </div>
                    <div class="bg-white">
                        <form method="get" enctype="multipart/form-data" action="houme.php" class="form-inline" align="center">
                            <div class="container my-5">
                            <h2>Pesquise seu imóvel ideal aqui!!</h2>
                                <div class="row"> 
                                            <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <select name="tipoo" id="tipoo" class="form-control col-10">
                                                <option value="">Tipo do imovel</option>
                                                <option value="CASA">CASA</option>
                                                <option value="APARTAMENTO">APARTAMENTO</option>
                                                <option value="TERRENO">TERRENO</option>
                                                <option value="CHACARA">CHACARA</option>
                                                <option value="SÍTIO">SÍTIO</option>
                                                <option value="FAZENDA">FAZENDA</option>
                                                <option value="GALPÃO">GALPÃO</option>
                                                <option value="SALA">SALA</option>
                                                <option value="SALÃ0">SALÃO</option>
                                                <option value="PRÉDIO">PRÉDIO</option>
                                                <option value="COBERTURA">COBERTURA</option>
                                                <option value="ÁREA">ÁREA</option>
                                            </select></label>
                                            <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <select name="pretende" id="pretende" class="form-control col-10">
                                                <option value="">Pretenção comercial</option>
                                                <option value="ALUGUEL">ALUGUEL</option>
                                                <option value="VENDA">VENDA </option>
                                                <option value="TEMPORADA">TEMPORADA(diária)</option>
                                            </select></label>
                                            <label class="form-fitler-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <input type="text" name="bairroo" id="bairroo" placeholder="Bairro" class="form-control col-10"/></label>
                                    </div>
                                    <div class="row">
                                            <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <input type="text" name="cidadee" id="cidadee" placeholder="Cidade" class="form-control col-10"/></label>
                                            <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <select name="dormm" id="dormm" class="form-control col-10">
                                                <option value="">Dormitórios</option>
                                                <option value="1.">1.</option>
                                                <option value="2.">2.</option>
                                                <option value="3.">3.</option>
                                                <option value="4.">4.</option>
                                                <option value="5.">5.</option>
                                                <option value="6.">6.</option>
                                                <option value="7+">7+</option>
                                            </select></label>
                                            <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <input type="text" name="valoor" class="valoor form-control col-10" placeholder="valor imovel(ex:1.000,00)"/></label>
                                    </div>
                                    <div class="row">
                                            <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <select name="condd" id="condd" class="form-control col-10">
                                                <option value="">Condominio</option>
                                                <option value="Sim">sim</option>
                                                <option value="Negativo">Não</option>
                                            </select></label>
                                        <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <input type="text" name="valorcond" class="valoor form-control col-10" placeholder="Valor cond(ex:1.000,00)"/></label>                       
                                        <label class="form-filter-control mt-2 mb-2 col-md-4 col-sm-12">
                                            <select name="vagas" id="vagas" class="form-control col-10">
                                                <option value="">Vagas na garagem</option>
                                                <option value="1.">1 Carro</option>
                                                <option value="2.">2 Carros</option>
                                                <option value="3.">3 Carros</option>
                                                <option value="4.">4 Carros</option>
                                                <option value="5.">5 Carros</option>
                                                <option value="6.">6 Carros</option>
                                                <option value="7+">7+ Carros</option>
                                            </select></label>
                                    <div class="container mt-5">
                                        <button type="submit" value="Buscar" class="btn btn-primary col-md-4 col-sm-12">Buscar</button>
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="tudao">
                        <div class="tudo">
                            <div class= "barra">    
                                <h3 class="text-center my-5">Quantidade de imóveis: <?php echo $totaly; ?></h3>
                                    <div class="paginao">
                                    <?php if($total > 0) {
                                    do {
                                        ?>
                                        <div class="coluna">
                                        <a href="visual.php?tag=<?php echo $row['tag']?>">
                                            <div class="pesquisado"> 
                                                <div class="containero">
                                                <div class="dinhero">        
                                                        <p class="branco">R$<?php echo $row['valor'] ?></p>
                                                    </div>
                                                <img class="imagemacao" src ="imagens/<?php echo $row['tag']?>01.jpg">
                                                <div class="middle">
                                                    <div class="text">Visualisar</div>
                                                </div>
                                                </div>
                                                    <h5 align="center"><?php echo $row['bairro']?></h5><p align="center"><?php echo$row['tipo'].' EM '.$row['cidade'].' PARA</br >'.$row['pretende']?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }while($row = mysqli_fetch_assoc($query));
                                    echo'.';    
                                    } 
                                    ?>
                                    <?php
                                    $anterior = $pagina -1;
                                    $proximo = $pagina +1;
                                    echo '<div class="container" align="center"><h5>'.$pagina.' de '.$totalpag.' paginas</h5 >';
                                    if ($pagina>1) {
                                        echo '<p><a href="?pagina='.$anterior.'&tipoo='.$tipo.'&pretende='.$pretende.'&bairroo='.$bairro.'&cidadee='.$cidade.'&dormm='.$dorm.'&valoor='.$valor.'&condd='.$cond.'&valorcond='.$valorcond.'&vagas='.$vagas.'"><- Anterior</a></p>';
                                        }
                                    if ($pagina<$totalpag) {
                                        echo '<p><a href="?pagina='.$proximo.'&tipoo='.$tipo.'&pretende='.$pretende.'&bairroo='.$bairro.'&cidadee='.$cidade.'&dormm='.$dorm.'&valoor='.$valor.'&condd='.$cond.'&valorcond='.$valorcond.'&vagas='.$vagas.'">Próxima -></a></p></div>';
                                        }
                                    ?>
                        </div>
                </div>
        </div>
           <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src=js/jquery-3.3.1.min.js></script>
    <script src=js/jquery.mask.js></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.valoor').mask("#.##0,00" , { reverse:true});
    });
    </script>      
    </body>
</html>