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
       div.barra{
    background-color:white;
    }
    body.fundo{
    background-color:#EDEDED;
    }
    div.flutuar{
        float:left;
    }div.pesquisar{
        background-color:#120a8f;
        box-shadow: 5px 5px 5px rgba(200, 200, 200, 0.2);
        border-radius:5px;
    }div.pesquisando{
        background-color:#FFFFFF;
        box-shadow: 2px 2px 2px rgba(200, 200, 200, 200);
        border-radius:5px;
        padding:0.2%;

    }.pesquisado{
        background-color:#FFFFFF;
        margin:4%;
        border:solid;
        border-color:rgba(200, 200, 200, 0.5);
        border-width:0.5px;
        padding-bottom:6%;
    }
    p{
    font:1.1em"Ubuntu",sans-serif !important; 
	color: #000000;
    
    }
    p.bairro{
    font:0.7em"Ubuntu",sans-serif !important;
	color: #000000;
    }
    p.branco{
    font:0.8em"Ubuntu",sans-serif !important;
	color: orange;
    
    }
    a{ 
    color: inherit; 
    text-decoration:none; 
    }
    .container {
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

    .container:hover .image {
    opacity: 0.3;
    }

    .container:hover .middle {
    opacity: 1;
    }
    .text {
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
    }
    div.dinhero{
        background-color:#120a8f;
        float:left!important;
        position:absolute!important;
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
        height:100%;
        max-height:200px;
        width:100%;
        max-width:320px;
        min-width:150px;
    }
    </style>
    </head>
        <body class="fundo">
        <?php
        include("adminsetor.php")
        ?>
        </br >

        <div class="tudao">
            <div class="tudo">
                <div class="flutuar">
                    <div class="pesquisar"></br >
                                    <p align="center" class="branco"><b>barra de pesquisa</b></p>
                                    </br>
                                    </div>
                        <div class="pesquisando">
                            <form method="get" enctype="multipart/form-data" action="gerenciaimovel.php" align="center"> 
                                        <div>
                                            <label><p>Tipo de imóvel*</p></label>
                                            <select name="tipoo" id="tipoo" align="center">
                                                <option value=""></option>
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
                                            </select>
                                        </div>
                                        </br >
                                        <div>
                                            <label ><p>Pretenção Comercial*</p></label>
                                            <select name="pretende" id="pretende" align="center">
                                                <option value=""></option>
                                                <option value="ALUGUEL">ALUGUEL</option>
                                                <option value="VENDA">VENDA </option>
                                                <option value="TEMPORADA">TEMPORADA(diária)</option>
                                            </select>
                                        </div>
                                        </br >
                                        <div>    
                                            <label ><p>Nome do bairro*</p></label>
                                            <input type="text" name="bairroo" id="bairroo" placeholder="ex Jardim da Paz" align="center"/>
                                        </div>
                                        </br >
                                        <div>
                                            <label><p>Nome da cidade*</p></label>
                                            <input type="text" name="cidadee" id="cidadee" placeholder="ex Campos do Jordao" align="center"/>
                                        </div>
                                        </br >
                                        <div>    
                                            <label><p>Dormitórios*</p></label>
                                            <select name="dormm" id="dormm" align="center">
                                                <option value=""></option>
                                                <option value="1.">1.</option>
                                                <option value="2.">2.</option>
                                                <option value="3.">3.</option>
                                                <option value="4.">4.</option>
                                                <option value="5.">5.</option>
                                                <option value="6.">6.</option>
                                                <option value="7+">7+</option>
                                            </select>
                                        </div>
                                        </br >
                                        <div >
                                            <label><p>Valor do Imovel</p></br >
                                            <input type="text" name="valoor" class="valoor" placeholder="ex:100.000,00"align="center"/></label>
                                        </div>   
                                        <div>     
                                            <label><p>Condominio fechado?</p></label>
                                            <select name="condd" id="condd" align="center">
                                                <option value=""></option>
                                                <option value="Sim">sim</option>
                                                <option value="Negativo">Não</option>
                                            </select>
                                        </div>
                                        </br >
                                        <div>
                                            <label><p>Valor do Condominio</p></label>
                                            <input type="text" name="valorcond" class="valoor" placeholder="ex:100,00" align="center"/>                         
                                        </div>
                                            </br >
                                        <div>
                                            <label><p>Vagas</p></br > 
                                            <select name="vagas" id="vagas" align="center">
                                                <option value=""></option>
                                                <option value="1.">1 Carro</option>
                                                <option value="2.">2 Carros</option>
                                                <option value="3.">3 Carros</option>
                                                <option value="4.">4 Carros</option>
                                                <option value="5.">5 Carros</option>
                                                <option value="6.">6 Carros</option>
                                                <option value="7+">7+ Carros</option>
                                            </select></label>
                                            </br >                         
                                        </div>
                                        </br >    
                                <input type="submit" value="Buscar" align="center"/>
                        </form>
                        </div>
                    </div>
                        <div class= "barra">    
                            <center><p>todos os imoveis são <?php echo $totaly; ?></p></center>
                                </br >
                            <table>
                            <tr>
                                <?php if($total > 0) {
                                do {
                                    ?>
                                    <td >
                                    <a href="excluirconfirma.php?tag=<?php echo $row['tag']?>">
                                        <div align="center" class="pesquisado"> 
                                            <div class="container">
                                            <div class="dinhero">        
                                                    <p class="branco"><b>R$<?php echo $row['valor'] ?></b></p>
                                                </div>
                                            <img class="imagemacao" src ="imagens/<?php echo $row['tag']?>01.jpg">
                                            <div class="middle">
                                                <div class="text">excluir</div>
                                            </div>
                                            </div>
                                                <p><?php echo $row['bairro']?></p><p class="bairro"><?php echo$row['tipo'].' EM '.$row['cidade'].' PARA</br >'.$row['pretende']?></p>
                                        </div>
                                    </a>
                                    </td>
                                <?php 
                                if($i == 3||$i==6||$i==9|$i==12){
                                echo'</tr><tr>';
                                }
                                $i++;
                                }while($row = mysqli_fetch_assoc($query));
                                echo'.';    
                                } 
                                ?>
                                </tr>
                                </table>
                                <center>
                                <?php
                                $anterior = $pagina -1;
                                $proximo = $pagina +1;
                                echo $pagina.' de '.$totalpag.' paginas</br >';
                                if ($pagina>1) {
                                    echo '<p><a href="?pagina='.$anterior.'&tipoo='.$tipo.'&pretende='.$pretende.'&bairroo='.$bairro.'&cidadee='.$cidade.'&dormm='.$dorm.'&valoor='.$valor.'&condd='.$cond.'&valorcond='.$valorcond.'&vagas='.$vagas.'"><- Anterior</a></p>';
                                    }
                                if ($pagina<$totalpag) {
                                    echo '<p><a href="?pagina='.$proximo.'&tipoo='.$tipo.'&pretende='.$pretende.'&bairroo='.$bairro.'&cidadee='.$cidade.'&dormm='.$dorm.'&valoor='.$valor.'&condd='.$cond.'&valorcond='.$valorcond.'&vagas='.$vagas.'">Próxima -></a></p>';
                                    }
                                ?>
                            </center>
                </div>
            </div>
               <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>      
        </body>
</html>