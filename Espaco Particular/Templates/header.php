<?php
if (!session_start()) {
    session_start();
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Espaço Privado</title>
        <link rel="stylesheet" href="../../General.css"/>
        <link rel="icon" href="../../Images/Icon.png"/>
    </head>
    <body>
        <div id="fundo"></div>
        <div id="header">
            <div id="logoDiv"><img id="logo" src="/Images/Estrela.png"></div>
            <nav>
                <ul id="ulMenu">
                    <a href="/"><li>Home</li></a>
                    <a href="/Velha/NewVelha.php"><li>Velha</li></a>
                    <a href="/Pages/Error/404"><li>OP2</li></a>
                    <form method="get" action='/pg/1'>
                        <input id="submitButton" type='submit' value='Pesquisar'></button>
                        <input id="txtBox" type="text" name='pesquisa' value='<?php
                        if (filter_input(INPUT_GET, "pesquisa")) {
                            echo filter_input(INPUT_GET, "pesquisa");
                        }
                        ?>'></input>
                </ul>
                </form>
            </nav>

            <nav id="nav2">
                <ul id="ulMenu2">
                    <a href="#"><li><<</li></a>
                    <a href='http://theslap.local/category/noticias'><li>Noticias</li></a>
                    <a href='http://theslap.local/category/pessoas'><li>Pessoas</li></a>
                    <a href='http://theslap.local/category/locais'><li>Locais</li></a>
                    <a href='http://theslap.local/category/ajuda'><li>Ajuda</li></a>
                    <a href="#"><li>>></li></a>
                </ul>
            </nav>
        </div>
