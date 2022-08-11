<?php
if (!session_start()) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diário de Bordo</title>
        <link rel="stylesheet" href="../../Style/Template.css"/>
        <link rel="icon" href="../../Images/Icon.png"/>
    </head>
    <body>
        <div id="fundo"></div>
        <div id="header">
            <div id="logoDiv"><img id="logo" src="/Images/Estrela.png"></div>
            <nav>
                <ul id="ulMenu">
                    <form method="get" action='/pg/1'>
                        <input class ="pesquisar" id="submitButton" type='submit' value='Pesquisar'></button>
                        <input class ="pesquisar" id="txtBox" type="text" name='pesquisa' value='<?php
                        if (filter_input(INPUT_GET, "pesquisa")) {
                            echo filter_input(INPUT_GET, "pesquisa");
                        }
                        ?>'></input>
                    </form>
                </ul>
            </nav>

            <nav id="nav2">
                <ul id="ulMenu2">
                    <a href="#"><li><<</li></a>
                    <a href='/'><li>Home</li></a>
                    <a href='/imagens'><li>Imagens</li></a>
                    <a href="/Velha"><li>Velha</li></a>
                    <a href="#"><li>>></li></a>
                </ul>
            </nav>
        </div>
        <hr>