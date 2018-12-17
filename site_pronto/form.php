<?php
session_start();
$status = $_SESSION['login'];
if($_SESSION['nome'] == ""){
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
    p.info{
    font:1.6em"Ubuntu",sans-serif !important;
    font-size: 72px;; 
    }
    div.bemvindo{
        background-color:#EDEDED;
        margin-left:200px;
        margin-right:200px;
        padding-left:10px;
        padding-right:20px;
        box-shadow: 2px 2px 2px rgba(200, 200, 200, 200);
        border-radius:5px;
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
    label{
    font:0.9em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: #000000;
    }
    p.ain{
    font:0.8em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: #000000;
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
            <form method="post" enctype="multipart/form-data" action="processarb.php">
                <div>
                    <div class="pesquisar">
                        <p class="branco">Bem vindo a etapa do cadastro!</p>
                        <p class="branco">a tag do seu imovel é <b ><?php echo $_SESSION['nome']; ?></b></p>
                    </div>
                    <div class ="bemvindo">
                        <p class="info">Informações sobre o imovel</p>
                        <div class="pesquisado">    
                                <p class="ain">Preencher em letra maiúscula todos os campos(menos o campo da observação)</p>
                                    <p class="info">o titulo sera representado pelos campos de:</p>
                                    <div>
                                        <label >Tipo de imóvel*
                                        <select name="tipoo" id="tipoo">
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
                                    </div>
                                    <div>
                                        <label >Pretenção Comercial*
                                        <select name="pretende" id="pretende">
                                                <option value="ALUGUEL">ALUGUEL</option>
                                                <option value="VENDA">VENDA </option>
                                                <option value="TEMPORADA">TEMPORADA(diária)</option>
                                        </select></label>
                                    </div>
                                    <div>    
                                        <label >Nome do bairro*
                                        <input type="text" name="bairroo" id="bairroo" placeholder="ex JARDIM DA PAZ"></label>
                                    </div>
                                    <div>
                                        <label>Nome da cidade*
                                        <input type="text" name="cidadee" id="cidadee" placeholder="ex AMERICANA"></label>
                                    </div>
                            </div>
                        <div class="pesquisado">    
                                <p class="info">Informações Importante!!</p>
                            <div>
                                <label>Nome da rua*
                                <input type="text" name="ruaa" id="ruaa" placeholder="ex Rua Pq das Nações"></label>
                            </div>
                            <div>    
                                <label>Dormitórios*
                                <select name="dormm" id="dormm">
                                    <option value="">inexistente</option>
                                    <option value="1.">1.</option>
                                    <option value="2.">2.</option>
                                    <option value="3.">3.</option>
                                    <option value="4.">4.</option>
                                    <option value="5.">5.</option>
                                    <option value="6.">6.</option>
                                    <option value="7+">7+</option>
                                </select></label>
                            </div>
                            <div >
                                <label>Valor do Imovel*
                                <input type="text" name="valoor" class="valoor" placeholder="ex:100.000,00"/></label>
                            </div>   
                            <div>     
                                <label>Condominio fechado?*
                                <select name="condd" id="condd">
                                    <option value="Sim">sim</option>
                                    <option value="não">Não</option>
                                </select></label>
                            </div>
                            <div>
                                <label>Descrição do imóvel*</label></br >
                                <textarea rows="4" cols="40" style="resize: none" name="obss"></textarea>
                        </div>         
                    </div>
                    <div class="pesquisado">
                                <p class="info">Informações adicionais</p>
                            <div>
                                <label>Valor do Condominio 
                                <input type="text" name="valorcond" class="valoor" placeholder="ex:100,00"/></label>                         
                            </div>
                            <div>
                                <label>Área total(em metros)
                                <input type="text" name="areat" class="valoor" placeholder="ex:1.000,00"/></label>
                            </div>
                            <div>
                                <label>Área construida(em metros)
                                <input type="text" name="areac" class="valoor" placeholder="ex:1.000,00"/></label>
                            </div>
                            <div>
                                <label>Vagas 
                                <select name="vagas" id="vagas">
                                    <option value="1.">1 Carro</option>
                                    <option value="2.">2 Carros</option>
                                    <option value="3.">3 Carros</option>
                                    <option value="4.">4 Carros</option>
                                    <option value="5.">5 Carros</option>
                                    <option value="6.">6 Carros</option>
                                    <option value="7+">7+ Carros</option>
                                </select></label>                         
                            </div>
                    </div>    
                    <input type="submit" value="Salvar" />
                </div>
            </form>
        </center>
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