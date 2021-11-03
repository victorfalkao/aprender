<?php
include './conexao.php';

$txtPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$lista_id = $txtPost["lista"];
$avaliacao = $txtPost["avaliacao"];
$turma = $txtPost["turma"];
//print_r($lista_id);

for($i=0; $i<count($lista_id); $i++){

$id = $lista_id[$i];
$port = $txtPost["port_$id"];
$l_est = $txtPost["le_$id"];
$mat = $txtPost["mat_$id"];
$qui = $txtPost["qui_$id"];
$fis = $txtPost["fis_$id"];
$bio = $txtPost["bio_$id"];
$his = $txtPost["his_$id"];
$geo = $txtPost["geo_$id"];
$fil = $txtPost["fil_$id"];
$soc = $txtPost["soc_$id"];
$art = $txtPost["art_$id"];
$inserir = "UPDATE $avaliacao SET port='$port',l_est='$l_est', mat='$mat', qui='$qui', fis='$fis', bio='$bio', his='$his', geo='$geo', fil='$fil', soc='$soc', art='$art' WHERE id='$id'";
$query = mysqli_query($conect, $inserir) or die(mysqli_error($conect));
}

echo "<script language='javascript' type='text/javascript'>alert('NOTAS SALVAS COM SUCESSO!');window.location.href='./menu.php'</script>";

