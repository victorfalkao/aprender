<?php
/* CONEXÃO BANCO DE DADOS*/
//SERVIDOR OFICIAL
$teste = "sim";

if($teste === "sim"){
$conect = mysqli_connect("localhost", "root", "842867", "std");
} else {
$conect = mysqli_connect("sql206.epizy.com", "epiz_30094769", "DSSpm3ciMv8cdjO", "epiz_30094769_amigosdojipe");
}

/* 
$inserir = "INSERT INTO rec_final VALUES (2, 5, 6 ,5, 6 ,5, 6 ,5, 6 ,5, 6 ,5)";
$query = mysqli_query($conect, $inserir) or die(mysqli_error($conect));

$avaliacao = "1_av";
$turma = "M2MR01";
$select = "SELECT * FROM $avaliacao INNER JOIN alunos ON alunos.id = 1_av.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query = mysqli_query($conect, $select) or die(mysqli_error($conect));
$retorno = mysqli_fetch_all($query);
print_r($retorno);
 
$id = 1;
$port = 4;
$l_est = 3;
$mat = 4;
$qui = 3;
$fis = 4;
$bio = 3;
$his = 4;
$geo = 3;
$fil = 4;
$soc = 3;
$art = 4;
$inserir = "UPDATE 1_av SET port='$port',l_est='$l_est', mat='$mat', qui='$qui', fis='$fis', bio='$bio', his='$his', geo='$geo', fil='$fil', soc='$soc', art='$art' WHERE id='$id'";
$query = mysqli_query($conect, $inserir) or die(mysqli_error($conect));

echo 'fim';
 * 
 * 
 */