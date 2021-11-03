<?php
include './conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <form action="./notas.php" method="post">
            <h2 style="text-align: center">SELECIONE A TURMA</h2>
            <select style="width: 100%; text-align: center" name="turma" id="turma" required="">
            <option value="SELECIONE" disabled="" selected="">SELECIONE A TURMA</option>
            <option value="" disabled="">1° ANO</option>
            <option value="M1MR01">M1MR01 (1001 - MANHÃ)</option>
            <option value="M1TR01">M1TR01 (1002 - TARDE)</option>
            <option value="M1TR02">M1TR02 (1003 - TARDE)</option>
            <option value="M1TR02">M1TR03 (1004 - TARDE)</option>
            <option value="M1TR04">M1TR04 (1005 - TARDE)</option>
            <option value="" disabled="">2° ANO</option>
            <option value="M2MR01">M2MR01 (2001 - MANHÃ)</option>
            <option value="M2TR01">M2TR01 (2002 - TARDE)</option>
            <option value="M2TR02">M2TR02 (2003 - TARDE)</option>
            <option value="M2TR03">M2TR03 (2004 - TARDE)</option>
            <option value="M2TR04">M2TR04 (2005 - TARDE)</option>
            <option value="" disabled="">3° ANO</option>
            <option value="M3MR01">M3MR01 (3001 - MANHÃ)</option>
            <option value="M3TR01">M3TR01 (3002 - TARDE)</option>
            <option value="M3TR02">M3TR02 (3003 - TARDE)</option>
            <option value="M3TR03">M3TR03 (3004 - TARDE)</option>
        </select>
        
        <br><br>
        <h2 style="text-align: center">SELECIONE A AVALIAÇÃO</h2>
        <select style="width: 100%; text-align: center" name="avaliacao" id="avaliacao" required="">
            <option value="SELECIONE" disabled="" selected="">SELECIONE A AVALIAÇÃO</option>
            <option value="1_av">1° AVALIAÇÃO</option>
            <option value="2_av">2° AVALIAÇÃO</option>
            <option value="1_rec">1° RECUPERAÇÃO</option>
            <option value="3_av">3° AVALIAÇÃO</option>
            <option value="4_av">4° AVALIAÇÃO</option>
            <option value="rec_final">RECUPERAÇÃO FINAL</option>
        </select>
        <br><br>
        
        <input style="width: 100%; height: 50px" type="submit" value="ENVIAR">
        </form>   
    </body>
</html>