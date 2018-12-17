<?php
session_start();
include("setting.php");
$nome = $_POST['nome'];
$query = mysqli_query($mysqli, "SELECT tag FROM imovel WHERE tag LIKE '$nome'") or die( mysqli_error($mysqli));
$row = mysqli_fetch_assoc($query);
$total = mysqli_num_rows($query);
    if($total > 0) {
		do {
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
        p{
    font:1.1em"Ubuntu",sans-serif !important;
    font-size: 24px;; 
	color: #000000;
    
    }
        </style>
    </head>
    <?php
    include("adminsetor.php");
    ?>
        <body>
            <center>
            <div class="bemvindo">
                <p>a tag foi verificada com sucesso</p>
                <p>a tag <b><?php echo $row['tag']?></b> esta sendo utilizada no momento</p>
                <a href ="tag.php">para voltar e escolher uma nova tag favor clique aqui</a>
                </div>
        </center>
           <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
<html>
        <?php
        }while($row = mysqli_fetch_assoc($query));
    echo"...";
    }else{
        $_SESSION['nome'] = $nome; 
    ?>
<html>
    <head>
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
        </style>
    </head>
    <?php
    include("adminsetor.php");
    ?>
        <body>
            <center>
            <div class="bemvindo">
                <p>Bem vindo a área de cadastro</p>
                <p>SUA TAG ESTÁ APTA!!</p>
                <p>e é importante que você tenha ela salva pois é ela que diferenciará seu imovel dentre todos!! verifique para ver se existe alguma tag igual antes de continuar!!</P>
            </div>
            <div>
                <a href = "form.php">a tag <b><?php echo $nome?></b> foi verificada com sucesso, para continuar clique aqui</a>
            </div>
        </center>
           <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
<html>
<?php
}
?>
