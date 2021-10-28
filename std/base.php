
<?php
//$txtPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//$turma = $txtPost['turma'];
//$select = "SELECT * FROM alunos WHERE turma = '$turma'";
//$query = mysqli_query($conect, $select) or die(mysqli_error($conect));
$retorno = array(array(1,"Victor Falcão da Vera cruz",5,6,5,6,5,6,5,6,5,6,5),array(2,"Amanda Pinheiro Falcão",5,6,5,6,5,6,5,6,5,6,5)); //mysqli_fetch_all($query);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h1>INFORME AS NOTAS DOS ALUNOS</h1>
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
            $nome = $retorno[$i][1];
            $port = $retorno[$i][2];
            $l_estrang = $retorno[$i][3];
            $mat = $retorno[$i][4];
            $qui = $retorno[$i][5];
            $fis = $retorno[$i][6];
            $bio = $retorno[$i][7];
            $his = $retorno[$i][8];
            $geo = $retorno[$i][9];
            $fil = $retorno[$i][10];
            $soc = $retorno[$i][11];
            $art = $retorno[$i][12];
            if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    echo            "<td>$n</td>";
    echo            "<td>$nome</td>";
    echo            "<td><input type='text' name='port' id='port_$id' value='$port'></td>";
    echo            "<td><input type='text' name='l_estrang' id='le_$id' value='$l_estrang'></td>";
    echo            "<td><input type='text' name='mat' id='mat_$id' value='$mat'></td>";
    echo            "<td><input type='text' name='qui' id='qui_$id' value='$qui'></td>";
    echo            "<td><input type='text' name='fis' id='fis_$id' value='$fis'></td>";
    echo            "<td><input type='text' name='bio' id=bio_$id'' value='$bio'></td>";
    echo            "<td><input type='text' name='his' id='his_$id' value='$his'></td>";
    echo            "<td><input type='text' name='geo' id='geo_$id' value='$geo'></td>";
    echo            "<td><input type='text' name='fil' id='fil_$id' value='$fil'></td>";
    echo            "<td><input type='text' name='soc' id='soc_$id' value='$soc'></td>";
    echo            "<td><input type='text' name='art' id='art_$id' value='$art'></td>";
    echo         "</tr>";
            }
            ?>
        </table>
    </body>
</html>
