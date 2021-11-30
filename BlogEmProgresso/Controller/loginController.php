<?php

error_reporting(0);
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    if(!session_start()){
    session_start();
    }
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];

    if ($_SESSION['usuario'] == 'dan@gou' && $_SESSION['senha'] == '123') {
        $_SESSION['permicao'] = true;
        require '../Controller/pageController.php';
    } else {
        $_SESSION['permicao'] = false;
        require '../Templates/head.php';
        echo'<a id="avisoLogin"><div>Alguma credencial está invalida</div></a>';
        require '../Pages/login.php';
        require '../Templates/footer.php';
    }
} else {
    $_SESSION['permicao'] = false;
    require '../Templates/head.php';
    require '../Pages/login.php';
    require '../Templates/footer.php';
}