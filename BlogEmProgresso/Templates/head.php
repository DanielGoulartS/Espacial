<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <style>.idpSelectAll{color:red;}</style>
    </head>
    <body>
        <div>IMG</div>
        <a href="/">HOME</a>
        <a href="http://theslap.local/Velha/NewVelha.php">Velha</a>
        <a href="http://theslap.local/Pages/Error/404">OP2</a>
        <form method="get" action='http://theslap.local/pg/1'>
            <input type='submit' value='Pesquisar'></button>
            <input type="text" name='pesquisa' value='<?php if(isset($_GET['pesquisa'])){ echo $_GET['pesquisa'];} ?>'></input>
        </form>

        <hr>
        <div>
            <ul>
                <li><<</li>
                <li><div><a href='http://theslap.local/category/noticias'>Noticias</a></div></li>
                <li><div><a href='http://theslap.local/category/pessoas'>Pessoas</a></div></li>
                <li><div><a href='http://theslap.local/category/locais'>Locais</a></div></li>
                <li><div><a href='http://theslap.local/category/ajuda'>Ajuda</a></div></li>
                <li>>></li>
            </ul>
        </div>
