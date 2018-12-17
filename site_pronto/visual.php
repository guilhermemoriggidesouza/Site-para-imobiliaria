<?php
include("setting.php");
$i=1;
$tag = $_GET['tag'];
$number=(isset($_GET['number']))? $_GET['number'] : "01";

$query = mysqli_query($mysqli, "SELECT * FROM imovel WHERE tag LIKE '$tag'") or die(mysqli_error($mysqli));
$row = mysqli_fetch_assoc($query);
$total = mysqli_num_rows($query);

$querya = mysqli_query($mysqli, "SELECT * FROM imagens WHERE nomeimagem LIKE '$tag'") or die( mysqli_error($mysqli));
$rowa = mysqli_fetch_assoc($querya);
$totala = mysqli_num_rows($querya);
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
            .image{
            margin-left:20%;
            margin-right:20%;
            width:60%;
            }
            .tidi{
            width:60%;
            background-color:rgba(0, 0, 130, 0.8);
            }
            table{
            border:solid;
            border-color:#EDEDED;
            }
            .tudo{
            padding:0%;
            margin:auto;
            width:87.84773060029283%;
            }
            .tudao{
            float:left;
            width:100%;
            }.divina{
            border-radius:5px;
            box-shadow: 5px 5px 8px rgba(0,0,0,0.2);
            -moz-box-shadow: 5px 5px 8px 0px rgba(0,0,0,0.2);
            -webkit-box-shadow:5px 5px 8px 0px rgba(0,0,0,0.2);
            }.central{
            margin:0 auto;
            }.magem{
            width:100%;
            height:100%;
            max-width:900px;
            max-height:800px;
            }
            </style>
    </head>
    <body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark mb-0 navbar-dark">
            <div class="container">
                <a href="houme.php" class="nav-brand mb-0"><img src="imagemcss/A.png" class="img-fluid" style="weight:10%;height:6%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
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
                            <a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown" id="navDrop">Redes Sociais</a>
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
            <div class="tudao">
                <div class="tudo">
                    <div>
                        <p class="ue mt-5">Tag: <?php echo $row['tag']?></p>
                    </div>
                    <div class="container bg-white divina">
                        <div class="container mb-5 text-center">
                            <h2><?php echo $row['tipo'].' PARA '.$row['pretende'].' NO BAIRRO '.$row['bairro'].', '.$row['cidade']?></h2>
                        </div>
                            <div class="bg-dark row">
                                <div class="col-lg-9 col-md-12">
                                    <img class="img-fluid magem" src ="imagens/<?php echo $rowa['nomeimagem'].$number?>.jpg">
                                </div>
                                <div class="col-lg-3 col-md-12"> 
                                <form action="mailsend.php" method="post">
                                    <div class="text-center">    
                                        <h1 style="color:white">Tenho Interesse</h1>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12 text-center">
                                            <label><input name="email" type="email" placeholder="email" class="form-control"/></label>
                                        </div>
                                    </div>
                                    <div class="row">   
                                        <div class="form-group col-12 text-center">    
                                            <label><input name="nome" type="text" placeholder="nome" class="form-control"/></label>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="form-group col-12 text-center">        
                                            <label><input name="tel" type="text" placeholder="Telefone" class="form-control"/></label>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="form-group col-12 text-center">
                                            <label><textarea class="form-control" name="mensagem" cols="27" rows="10" placeholder="Mensagem" style="resize:none"></textarea></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12 text-center">   
                                            <label><button class="btn btn-primary"  type="submit">enviar</button><label>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                </div>
                            </div>  
                            <table>
                                <tr>
                                <?php
                                    if($totala > 0) {
                                            do {    
                                        echo '<td><a href="visual.php?number='.$rowa['numero'].'&tag='.$tag.'"><img width="100px" height="90px" src =imagens/'.$rowa['nomeimagem'].$rowa['numero'].'.jpg></a></td>';
                                        if($i == 8||$i == 16||$i == 24||$i == 32){
                                        echo'</tr><tr>';
                                        }
                                        $i++;
                                    }while($rowa = mysqli_fetch_assoc($querya));
                                    echo"";
                                    }
                                ?>
                                </tr>
                            </table>
                            <h5 class="text-center" style="opacity:0.5">_____________________________________________________</h5>
                            <h3 class="text-center">Informações sobre o imóvel:</h3>
                            <div class="container text-center">
                                <ul class="list-inline mt-5 mb-5">
                                    <li class="list-inline-item mr-5">
                                        <?php
                                        if($row['dorm'] == ""){
                                            echo '<p><img height="50px" weight="50px" src="imagemcss/dorm.png">: </p>';
                                        }else{
                                        ?>
                                            <p><img height="50px" weight="50px" src="imagemcss/dorm.png">: <?php echo $row['dorm'] ?></p>
                                        <?php
                                        } ?>
                                    </li>
                                    <li class="list-inline-item mr-5">    
                                        <?php                
                                        if($row['areat']==""){
                                            echo '<p><img height="50px" weight="50px" src="imagemcss/areac.png">Total: </p>';    
                                        }else{
                                        ?>

                                        <p><img height="50px" weight="50px" src="imagemcss/areac">Total: <?php echo $row['areat'] ?>mts</p>        

                                        <?php
                                        }
                                        ?>
                                    </li> 
                                    <li class="list-inline-item mr-5">
                                            <?php                
                                            if($row['areac']==""){
                                                echo '<p><img height="50px" weight="20px" src="imagemcss/areac.png">Construida: </p>';   
                                            }else{
                                            ?>

                                        <p><img height="50px" weight="50px" src="imagemcss/areac.png">Construida: <?php echo $row['areac'] ?>mts</p>
                                        
                                            <?php
                                            }
                                            ?>
                                    </li>
                                    <li class="list-inline-item mr-5">
                                        <p><img height="50px" weight="50px" src="imagemcss/carro.png">: <?php echo $row['vagas'] ?></p>        
                                    </li>
                                </ul>
                                <div class="span9">
                                    <textarea rows="20" cols="90" readonly="yes" class="textinput" style="resize:none;width:100%"><?php echo $row['obs']?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
                   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>               
        </body>
</html>