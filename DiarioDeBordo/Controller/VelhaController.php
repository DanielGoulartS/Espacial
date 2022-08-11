<?php
error_reporting(0);


require_once '../Model/Connection.php';
require_once '../Model/Contador.php';

//Instancias Necessárias
$dbConnection = new Connection();
$contador = new Contador($dbConnection, 'Velha');

//Contador de acessos
$contador->Contar();

require_once '../Templates/header.php';
require_once '../Velha/NewVelha.html';
require_once '../Templates/footer.php';
?>