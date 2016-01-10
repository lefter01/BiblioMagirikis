<?php
require 'DBconnection.php';

$onoma_sintagis = $_POST['onoma_sintagis'];
$katigoria = $_POST['katigoria'];
$xronos_ektelesis = $_POST['xronos_ektelesis'];
$odigies_ektelesis = $_POST['odigies_ektelesis'];
$ing1 = $_POST['ingredient1'];
$quant1 = $_POST['quantity1'];
$ing2 = $_POST['ingredient2'];
$quant2 = $_POST['quantity2'];
$ing3 = $_POST['ingredient3'];
$quant3 = $_POST['quantity3'];
$ing4 = $_POST['ingredient4'];
$quant4 = $_POST['quantity4'];
$ing5 = $_POST['ingredient5'];
$quant5 = $_POST['quantity5'];
$ing6 = $_POST['ingredient6'];
$quant6 = $_POST['quantity6'];
$ing7 = $_POST['ingredient7'];
$quant7 = $_POST['quantity7'];
$ing8 = $_POST['ingredient8'];
$quant8 = $_POST['quantity8'];
$ing9 = $_POST['ingredient9'];
$quant9 = $_POST['quantity9'];
$ing10 = $_POST['ingredient10'];
$quant10 = $_POST['quantity10'];


$databaseConnection->query("INSERT INTO syntages (katigoria,onoma_sintagis,xronos_ektelesis,odigies_ektelesis,"
        . "ing1,quant1,ing2,quant2,ing3,quant3,ing4,quant4,ing5,quant5,ing6,quant6,ing7,quant7,ing8,quant8,ing9,quant9,ing10,quant10,created) VALUES"
        . "('{$katigoria}','{$onoma_sintagis}','{$xronos_ektelesis}','{$odigies_ektelesis}','{$ing1}','{$quant1}',"
        . "'{$ing2}','{$quant2}','{$ing3}','{$quant3}','{$ing4}','{$quant4}','{$ing5}','{$quant5}','{$ing6}',"
        . "'{$quant6}','{$ing7}','{$quant7}','{$ing8}','{$quant8}','{$ing9}','{$quant9}','{$ing10}','{$quant10}',NOW())");
        
header("Location: index.php");