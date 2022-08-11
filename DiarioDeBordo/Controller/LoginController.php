<?php

error_reporting(0);

require_once '../Model/Connection.php';
require_once '../Model/Contador.php';

//Instancias Necessárias
$dbConnection = new Connection();
$contador = new Contador($dbConnection, 'Login');

//Contador de acessos
$contador->Contar();

if (filter_input(INPUT_POST, "usuario") || filter_input(INPUT_POST, "senha")) {
    if (!session_start()) {
        session_start();
    }
    $_SESSION["usuario"] = filter_input(INPUT_POST, "usuario");
    $_SESSION["senha"] = filter_input(INPUT_POST, "senha");

    if ($_SESSION["usuario"] == 'dan@gou' && $_SESSION["senha"] == '123') {
        $_SESSION["permicao"] = true;
        echo'<meta http-equiv="refresh" content="0;url=/">';
        require_once '../Controller/pageController.php';
    } else {
        $_SESSION["permicao"] = false;
        include_once '../Templates/header.php';
        echo'<a id="avisoLogin"><div>Ao menos uma credencial está invalida!</div></a>';
        include_once '../Pages/login.php';
        include_once '../Templates/footer.php';
    }
} else {
    $_SESSION["permicao"] = false;
    include_once '../Templates/header.php';
    echo'<a id="avisoLogin"><div>Insira suas credenciais:</div></a>';
    include_once '../Pages/login.php';
    include_once '../Templates/footer.php';
}