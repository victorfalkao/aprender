<?php
include './conexao.php';
$txtPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$turma = $txtPost["turma"];
$avaliacoes = array("1", "2", "_1REC", "3", "4", "_RECFINAL");

// SELECIONAR A 1° AVALIAÇÃO
$select1 = "SELECT * FROM 1_av INNER JOIN alunos ON alunos.id = 1_av.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query1 = mysqli_query($conect, $select1) or die(mysqli_error($conect));
$retorno1 = mysqli_fetch_all($query1);

// SELECIONAR A 2° AVALIAÇÃO
$select2 = "SELECT * FROM 2_av INNER JOIN alunos ON alunos.id = 2_av.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query2 = mysqli_query($conect, $select2) or die(mysqli_error($conect));
$retorno2 = mysqli_fetch_all($query2);

// SELECIONAR A 1° RECUPERAÇÃO
$select_1REC = "SELECT * FROM 1_rec INNER JOIN alunos ON alunos.id = 1_rec.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query_1REC = mysqli_query($conect, $select_1REC) or die(mysqli_error($conect));
$retorno_1REC = mysqli_fetch_all($query_1REC);

// SELECIONAR A 3° AVALIAÇÃO
$select3 = "SELECT * FROM 3_av INNER JOIN alunos ON alunos.id = 3_av.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query3 = mysqli_query($conect, $select3) or die(mysqli_error($conect));
$retorno3 = mysqli_fetch_all($query3);

// SELECIONAR A 4° AVALIAÇÃO
$select4 = "SELECT * FROM 4_av INNER JOIN alunos ON alunos.id = 4_av.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query4 = mysqli_query($conect, $select4) or die(mysqli_error($conect));
$retorno4 = mysqli_fetch_all($query4);

// SELECIONAR A RECUPERAÇÃO FINAL
$select_RECFINAL = "SELECT * FROM rec_final INNER JOIN alunos ON alunos.id = rec_final.id WHERE alunos.turma = '$turma' ORDER BY alunos.nome";
$query_RECFINAL = mysqli_query($conect, $select_RECFINAL) or die(mysqli_error($conect));
$retorno_RECFINAL = mysqli_fetch_all($query_RECFINAL);

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
        <table style="table-layout:auto; width:100%">
            <thead>
                <tr>
                    <th>N°</th>            
                    <th style="width: 200px">NOME</th>            
                    <th colspan="4">1° AVALIAÇÃO</th>
                    <th colspan="4">2° AVALIAÇÃO</th>
                    <th colspan="4">1° RECUPERAĆÃO</th>
                    <th colspan="4">3° AVALIAÇÃO</th>
                    <th colspan="4">4° AVALIAÇÃO</th>
                    <th colspan="4">RECUPERAÇÃO FINAL</th>
                    </tr>
            </thead>
            <?php
            //LOOPING PARA ARMAZENAR TODAS AS NOTAS EM VARIÁVEIS
            for($i=0; $i<count($retorno1); $i++){//count($retorno1)
            $n = $i+1;
            $nome = $retorno1[$i][14];
            
            //1° AVALIAÇÃO
            $port1 = $retorno1[$i][1];
            $l_estrang1 = $retorno1[$i][2];
            $mat1 = $retorno1[$i][3];
            $qui1 = $retorno1[$i][4];
            $fis1= $retorno1[$i][5];
            $bio1 = $retorno1[$i][6];
            $his1 = $retorno1[$i][7];
            $geo1 = $retorno1[$i][8];
            $fil1 = $retorno1[$i][9];
            $soc1 = $retorno1[$i][10];
            $art1 = $retorno1[$i][11];
            
            //2° AVALIAÇÃO
            $port2 = $retorno2[$i][1];
            $l_estrang2 = $retorno2[$i][2];
            $mat2 = $retorno2[$i][3];
            $qui2 = $retorno2[$i][4];
            $fis2= $retorno2[$i][5];
            $bio2 = $retorno2[$i][6];
            $his2 = $retorno2[$i][7];
            $geo2 = $retorno2[$i][8];
            $fil2 = $retorno2[$i][9];
            $soc2 = $retorno2[$i][10];
            $art2 = $retorno2[$i][11];
            
            //1° RECUPERAÇÃO
            $port_1REC = $retorno_1REC[$i][1];
            $l_estrang_1REC = $retorno_1REC[$i][2];
            $mat_1REC = $retorno_1REC[$i][3];
            $qui_1REC = $retorno_1REC[$i][4];
            $fis_1REC= $retorno_1REC[$i][5];
            $bio_1REC = $retorno_1REC[$i][6];
            $his_1REC = $retorno_1REC[$i][7];
            $geo_1REC = $retorno_1REC[$i][8];
            $fil_1REC = $retorno_1REC[$i][9];
            $soc_1REC = $retorno_1REC[$i][10];
            $art_1REC = $retorno_1REC[$i][11];
            
            //3° AVALIAÇÃO
            $port3 = $retorno1[$i][1];
            $l_estrang3 = $retorno3[$i][2];
            $mat3 = $retorno3[$i][3];
            $qui3 = $retorno3[$i][4];
            $fis3= $retorno3[$i][5];
            $bio3 = $retorno3[$i][6];
            $his3 = $retorno3[$i][7];
            $geo3 = $retorno3[$i][8];
            $fil3 = $retorno3[$i][9];
            $soc3 = $retorno3[$i][10];
            $art3 = $retorno3[$i][11];
            
            //4° AVALIAÇÃO
            $port4 = $retorno4[$i][1];
            $l_estrang4 = $retorno4[$i][2];
            $mat4 = $retorno4[$i][3];
            $qui4 = $retorno4[$i][4];
            $fis4= $retorno4[$i][5];
            $bio4 = $retorno4[$i][6];
            $his4 = $retorno4[$i][7];
            $geo4 = $retorno4[$i][8];
            $fil4 = $retorno4[$i][9];
            $soc4 = $retorno4[$i][10];
            $art4 = $retorno4[$i][11];
            
            //RECUPERAÇÃO FINAL
            $port_RECFINAL = $retorno_RECFINAL[$i][1];
            $l_estrang_RECFINAL = $retorno_RECFINAL[$i][2];
            $mat_RECFINAL = $retorno_RECFINAL[$i][3];
            $qui_RECFINAL = $retorno_RECFINAL[$i][4];
            $fis_RECFINAL= $retorno_RECFINAL[$i][5];
            $bio_RECFINAL = $retorno_RECFINAL[$i][6];
            $his_RECFINAL = $retorno_RECFINAL[$i][7];
            $geo_RECFINAL = $retorno_RECFINAL[$i][8];
            $fil_RECFINAL = $retorno_RECFINAL[$i][9];
            $soc_RECFINAL = $retorno_RECFINAL[$i][10];
            $art_RECFINAL = $retorno_RECFINAL[$i][11];
            
            if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    echo            "<td rowspan='7'>$n</td>";
    echo            "<td rowspan='7' style='width:200px'>$nome</td>";
                echo "</tr>";
                
                $disciplina1 = array("port", "l_estrang", "mat", "qui");
                $disciplina2 = array("fis", "bio", "his", "geo");
                $disciplina3 = array("fil", "soc", "art");
//LOOPING PARA PREENCHER A PRIMEIRA LINHA DE DISCIPLINAS
    if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    for($x=0; $x<6; $x++){
echo        "<td style='border-style: solid; border-width: 2px 2px 0 2px'>port</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>l. est</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>mat</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>qui</td>";
    }
    echo "</tr>";
    
//LOOPING PARA PREENCHER A PRIMEIRA LINHA DE NOTAS
    if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    
            foreach ($avaliacoes as $avaliacao) {
        if($avaliacao==="1"){
            foreach ($disciplina1 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."2"} || ${$dis1."_1REC"}<5){
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
        
        }else if($avaliacao==="2"){
            foreach ($disciplina1 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."1"} || ${$dis1."_1REC"}<5){
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
            
        }else if($avaliacao==="_1REC"){
            foreach ($disciplina1 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    }
            }
        }
               
        else if($avaliacao==="3"){
          foreach ($disciplina1 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."4"} || ${$dis1."_RECFINAL"}<5){
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }  
        }
        else if($avaliacao==="4"){
            foreach ($disciplina1 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."3"} || ${$dis1."_RECFINAL"}<5){
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
        }
        else if($avaliacao==="_RECFINAL"){
            foreach ($disciplina1 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if($dis1==="port"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    }
            }
        }
            }
            
            
     echo "</tr>";
     
    //LOOPING PARA PREENCHER A SEGUNDA LINHA DE DISCIPLINAS
    if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    for($x=0; $x<6; $x++){
echo        "<td style='border-style: solid; border-width: 2px 2px 0 2px;'>fis</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>bio</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>his</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>geo</td>";
    }
    echo "</tr>";
    
//LOOPING PARA PREENCHER A SEGUNDA LINHA DE NOTAS
    if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    
            foreach ($avaliacoes as $avaliacao) {
        if($avaliacao==="1"){
            foreach ($disciplina2 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."2"} || ${$dis1."_1REC"}<5){
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
        
        }else if($avaliacao==="2"){
            foreach ($disciplina2 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."1"} || ${$dis1."_1REC"}<5){
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
            
        }else if($avaliacao==="_1REC"){
            foreach ($disciplina2 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    }
            }
        }
               
        else if($avaliacao==="3"){
          foreach ($disciplina2 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."4"} || ${$dis1."_RECFINAL"}<5){
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }  
        }
        else if($avaliacao==="4"){
            foreach ($disciplina2 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."3"} || ${$dis1."_RECFINAL"}<5){
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
        }
        else if($avaliacao==="_RECFINAL"){
            foreach ($disciplina2 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if($dis1==="fis"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    }
            }
        }
            }
            
            
     echo "</tr>";      
     //LOOPING PARA PREENCHER A TERCEIRA LINHA DE DISCIPLINAS
    if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    for($x=0; $x<6; $x++){
echo        "<td style='border-style: solid; border-width: 2px 2px 0 2px;'>fil</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>soc</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'>art</td>";
echo        "<td style='border-style: solid; border-width: 2px 2px 0 0;'></td>";
    }
    echo "</tr>";
    
//LOOPING PARA PREENCHER A TERCEIRA LINHA DE NOTAS
     if($n%2!=0){
                echo "<tr>";
            }else{
                echo "<tr style='background-color: #dddddd'>";
            }
    
            foreach ($avaliacoes as $avaliacao) {
        if($avaliacao==="1"){
            foreach ($disciplina3 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."2"} || ${$dis1."_1REC"}<5){
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
echo "<td></td>";
        }else if($avaliacao==="2"){
            foreach ($disciplina3 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."1"} || ${$dis1."_1REC"}<5){
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
echo "<td></td>";            
        }else if($avaliacao==="_1REC"){
            foreach ($disciplina3 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    }
            }
echo "<td></td>";  
        }else if($avaliacao==="3"){
          foreach ($disciplina3 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."4"} || ${$dis1."_RECFINAL"}<5){
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }  
echo "<td></td>";
        }
        else if($avaliacao==="4"){
            foreach ($disciplina3 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if(${$dis1.$avaliacao} >= ${$dis1."3"} || ${$dis1."_RECFINAL"}<5){
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    
                    }else{
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: blue;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: blue;'>${$dis1.$avaliacao}</td>";                        
                    }
                }
            }
        }
echo"<td></td>";
        }
        else if($avaliacao==="_RECFINAL"){
            foreach ($disciplina3 as $dis1) {
                if(${$dis1.$avaliacao}>=5){
                    if(${$dis1.$avaliacao}==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: green;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: green;'>${$dis1.$avaliacao}</td>";                        
                    }
                }else{
                    if($dis1==="fil"){
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 2px; background-color: red;'>${$dis1.$avaliacao}</td>";
                    } else {
echo                    "<td style='border-style: solid; border-width: 0 2px 2px 0; background-color: red;'>${$dis1.$avaliacao}</td>";                        
                    }                
                    }
            }
        }
//echo "<td></td>";
            }
            
            
     echo "</tr>";  
    }// FECHA O PRIMEIRO FOR

        ?>
        <br><br>
        
        </form>
    </body>
</html>