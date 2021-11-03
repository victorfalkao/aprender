<?php
include './conexao.php';
$txtPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$avaliacao = $txtPost['avaliacao'];
$turma = $txtPost['turma'];
$select = "SELECT * FROM $avaliacao INNER JOIN alunos ON alunos.id = $avaliacao.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query = mysqli_query($conect, $select) or die(mysqli_error($conect));
$retorno = mysqli_fetch_all($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <form action="./salvar_notas.php" method="post">
        <h1 style="text-align: center">INFORME AS NOTAS DOS ALUNOS</h1>
        <?php
        echo "<h3 style='text-align: center'>TURMA: $turma</h3>"
        ?>
        <br>
        <table>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>NOME</th>
                    <th>PORT</th>
                    <th>L. ESTRANG</th>
                    <th>MAT</th>
                    <th>QUÍ</th>
                    <th>FÍS</th>
                    <th>BIO</th>
                    <th>HIS</th>
                    <th>GEO</th>
                    <th>FIL</th>
                    <th>SOC</th>
                    <th>ART</th>
                </tr>
            </thead>
            <?php
            for($i=0; $i<count($retorno); $i++){
            $n = $i+1;
            $id = $retorno[$i][0];
            $nome = $retorno[$i][13];
            $port = $retorno[$i][1];
            $l_estrang = $retorno[$i][2];
            $mat = $retorno[$i][3];
            $qui = $retorno[$i][4];
            $fis = $retorno[$i][5];
            $bio = $retorno[$i][6];
            $his = $retorno[$i][7];
            $geo = $retorno[$i][8];
            $fil = $retorno[$i][9];
            $soc = $retorno[$i][10];
            $art = $retorno[$i][11];
            $lista[] = $id;
            echo "<input type='hidden' name='lista[]' id='lista[]' value='$id'>";
            if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    echo            "<td>$n</td>";
    echo            "<td>$nome</td>";
    echo            "<td><input type='text' name='port_$id' id='port_$id' value='$port'></td>";
    echo            "<td><input type='text' name='le_$id' id='le_$id' value='$l_estrang'></td>";
    echo            "<td><input type='text' name='mat_$id' id='mat_$id' value='$mat'></td>";
    echo            "<td><input type='text' name='qui_$id' id='qui_$id' value='$qui'></td>";
    echo            "<td><input type='text' name='fis_$id' id='fis_$id' value='$fis'></td>";
    echo            "<td><input type='text' name='bio_$id' id=bio_$id'' value='$bio'></td>";
    echo            "<td><input type='text' name='his_$id' id='his_$id' value='$his'></td>";
    echo            "<td><input type='text' name='geo_$id' id='geo_$id' value='$geo'></td>";
    echo            "<td><input type='text' name='fil_$id' id='fil_$id' value='$fil'></td>";
    echo            "<td><input type='text' name='soc_$id' id='soc_$id' value='$soc'></td>";
    echo            "<td><input type='text' name='art_$id' id='art_$id' value='$art'></td>";
    echo         "</tr>";
    
            }
            ?>
        </table>
        <?php
        echo "<input type='hidden' name='turma' id='turma' value='$turma'>";
        echo "<input type='hidden' name='avaliacao' id='avaliacao' value='$avaliacao'>";
        
        ?>
        <br><br>
        <input style="width: 100%; height: 50px" type="submit" value="SALVAR">
        </form>
    </body>
</html>
