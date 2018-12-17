<?php
include("setting.php");
    $i=1;
    $prair = $_SESSION['nome'];
    $query = mysqli_query($mysqli, "SELECT * FROM imagens WHERE nomeimagem LIKE '$prair'") or die( mysqli_error($mysqli));
    $row = mysqli_fetch_assoc($query);
    $total = mysqli_num_rows($query);
    if($total > 0) {
		do {
            echo '<td><a href="excluirimagem.php?codigo='.$row['numero'].'"><p class="uai">x</p><img align="center" width="50px" height="50px" src =imagens/'.$row['nomeimagem'].$row['numero'].'.jpg><p>'.$row['nomeimagem'].$row['numero'].'</p></a></td>';
            if($i == 4||$i == 8||$i==12||$i==16){
                echo'</tr><tr>';
                }
            $i++;
        }while($row = mysqli_fetch_assoc($query));
    echo"...";
    }
?>