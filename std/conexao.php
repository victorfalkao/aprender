<?php
/* CONEXÃO BANCO DE DADOS*/
//SERVIDOR OFICIAL
$teste = "nao";

if($teste === "sim"){
$conect = mysqli_connect("localhost", "root", "842867", "std");
} else {
$conect = mysqli_connect("sql304.epizy.com", "epiz_30130706", "ZyA30whFytgDqzQ", "epiz_30130706_std");
} 