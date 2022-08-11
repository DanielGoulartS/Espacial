<?php

error_reporting(0);
session_start();
//echo 'PG';

require_once '../Model/Connection.php';
require_once '../Model/Contador.php';

//Instancias Necessárias
$dbConnection = new Connection();
$contador = new Contador($dbConnection, 'Home');

//Contador de acessos
$contador->Contar();


//Iniciação de Variaveis
    $pesquisa = '';

    if (!(filter_input(INPUT_GET, "npage")) || filter_input(INPUT_GET, "npage") == '') {
        $numPaginas = 1;
    } else {
        $numPaginas = filter_input(INPUT_GET, "npage");
    }

//CRUD (checado em ordem conforme as variaveis e solicitações passadas por POST, GET, SESSION, etc);
//Query Exclusão de Post
    if (filter_input(INPUT_POST, "excluirPost")) {
        $excluirPost = filter_input(INPUT_POST, "excluirPost");
        $queryDelete = "delete from news where id = $excluirPost limit 1;";
        $dbConnection->Query($queryDelete);
    }

//Query de publicação de novo Post
    if (filter_input(INPUT_POST, "slug") && filter_input(INPUT_POST, "titulo") && filter_input(INPUT_POST, "corpo")) {
        if ($_SESSION["slug"] != filter_input(INPUT_POST, "slug")) {
            $_SESSION["slug"] = filter_input(INPUT_POST, "slug");
            $slug = filter_input(INPUT_POST, "slug");
            $titulo = addcslashes(filter_input(INPUT_POST, "titulo"), "'");
            $corpo = addcslashes(filter_input(INPUT_POST, "corpo"), "'");

            $queryInsert = "INSERT INTO `news`(`title`, `slug`, `body`) VALUES ( '$titulo', '$slug', '$corpo');";
            $dbConnection->Query($queryInsert);
        } else {
            echo'<h1 id="warning">Conteúdo ja inserido.</h1>';
            unset($_SESSION["slug"]);
        }
    }

//Query do Paginador
    if (filter_input(INPUT_GET, "pesquisa")) {
        $pesquisa = filter_input(INPUT_GET, "pesquisa");
    }
    $query_paginador = $dbConnection->Query("select id from news where id != '0' and (body like '%$pesquisa%'"
            . " or title like '%$pesquisa%') order by id;");
    $paginas = (mysqli_num_rows($query_paginador) / 4);

//Query Destaque
//$queryHighLight = mysqli_query($conn, "select * from news where id = '0';");
//Query da Lista de Posts
    if (filter_input(INPUT_GET, "pesquisa")) {
        if ($numPaginas - 1 == 0) {
            $queryselectAll = "select id, title, slug, substring(body, 1, 200)as body from news where id != '0'"
                    . " and (body like '%$pesquisa%' or title like '%$pesquisa%') order by id desc limit 4;";
        } else {
            $queryselectAll = "select id, title, slug, substring(body, 1, 200)as body from news where id != '0'"
                    . " and (body like '%$pesquisa%' or title like '%$pesquisa%') order by id desc limit 4"
                    . " offset " . 4 * ($numPaginas - 1) . ";";
        }
    } else {
        if ($numPaginas - 1 == 0) {
            $queryselectAll = "select id, title, slug, substring(body, 1, 200)as body from news where id != 0"
                    . " order by id desc limit 4;";
        } else {
            $queryselectAll = "select id, title, slug, substring(body, 1, 200)as body from news where id != 0"
                    . " order by id desc limit 4 offset " . 4 * ($numPaginas - 1) . ";";
        }
    }
    $queryPosts = $dbConnection->Query($queryselectAll);

    include_once '../Templates/header.php';
    include_once "../Pages/home.php";
    include_once '../Templates/footer.php';