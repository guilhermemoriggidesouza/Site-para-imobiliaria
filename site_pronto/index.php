
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <style>
    body{
    padding:0px;
    margin:0px;
    }
    .butao{
    width:100%;
    }
    .fundo{
    background-image:url(imagemcss/B.jpg);
    background-repeat:no-repeat;
	background-size:100% 100%;
	-webkit-background-size: 100% 100%;
	-o-background-size: 100% 100%;
	-khtml-background-size: 100% 100%;
	-moz-background-size: 100% 100%;

    }
    img.desc{
    width:100%;
    max-width:650px;
    opacity:0.9;
    display:block;
    margin:5% auto;
    }
    .tudo{
    padding:0%;
    margin:auto;
    width:70.27818448023426%;
    }.tudao{
    width:100%;
    }
    .mikeojegue{
    background-color:rgba(250,250,250,0.5);
    padding:3%;
    border-radius:5px;
    }
    </style>
</head>
    <body class="fundo">
        <div class="tudao">
            <div class="tudo">
                <div class="container">
                    <img src="imagemcss/ct.png" class="img-fluid desc"/>
                </div>
                <div class="container mikeojegue">
                    <form method="get" enctype="multipart/form-data" action="houme.php" class="form-inline">
                        <div class="container">
                          	<div class="row">
                              <select name="tipoo" id="tipoo" class="form-control col-md-4 col-xs-12">
                                      <option value="">Tipo do imóvel</option>
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
                              <select name="pretende" id="pretende" class="form-control col-md-4 col-xs-12">
                                      <option value="">Pretenção comercial</option>
                                      <option value="ALUGUEL RESIDENCIAL">ALUGUEL RESIDENCIAL</option>
                                      <option value="ALUGUEL COMERCIAL">ALUGUEL COMERCIAL</option>
                                      <option value="VENDA RESIDENCIAL">VENDA RESIDENCIAL</option>
                                      <option value="VENDA COMERCIAL">VENDA COMERCIAL</option>
                                      <option value="TEMPORADA">TEMPORADA(diária)</option>
                              </select>
                              <input type="text" name="cidadee" id="cidadee" class="form-control col-md-4 col-xs-12" placeholder="Sua cidade(em maiúsculo)"/>  
                          	</div>
                       		<div class="row">       
                                <select name="dormm" id="dormm" class="form-control col-md-4 col-xs-12">
                                    <option value="">Dormitórios</option>
                                    <option value="1.">1.</option>
                                    <option value="2.">2.</option>
                                    <option value="3.">3.</option>
                                    <option value="4.">4.</option>
                                    <option value="5.">5.</option>
                                    <option value="6.">6.</option>
                                    <option value="7+">7+</option>
                                </select>
                                <input type="text" name="valoor" class="valoor form-control col-md-8 col-xs-12" placeholder="valor do imóvel"/>                             					</div>
                              <div class="container ">
                                  <button type="submit" class="btn btn-primary butao">buscar</button>
                             </div>
                        <div>
                    </form>
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