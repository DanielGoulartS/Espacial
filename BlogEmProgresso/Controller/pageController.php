<?php

error_reporting(0);
session_start();
//echo 'PG';
$host = 'localhost';
$usuario = 'newuser';
$senha = '';
$base = 'base';

$conn = mysqli_connect($host, $usuario, $senha, $base) or die("Erro ao Conectar a base de dados.");
$pesquisa = '';

if (!isset($_GET['npage']) || $_GET['npage'] == '') {
    $npage = 1;
} else {
    $npage = $_GET['npage'];
}

//CRUD
//Query Exclusão de Post
if ($_POST['excluirPost']) {
    $excluirPost = $_POST['excluirPost'];
    $queryDelete = "delete from news where id = $excluirPost limit 1;";
    mysqli_query($conn, $queryDelete);
}
//Query de publicar novo Post
if ($_POST['slug'] && $_POST['titulo'] && $_POST['corpo']) {
    if ($_SESSION['titulo'] !== $_POST['titulo']) {
        $_SESSION['titulo'] = $_POST['titulo'];
        $queryInsert = "INSERT INTO `news`(`title`, `slug`, `body`) VALUES ( '" . $_SESSION["titulo"] . "', '" . $_SESSION["slug"] . "', '" . $_SESSION["corpo"] . "');";
        mysqli_query($conn, $queryInsert);
    } else {
        echo'<p>Conteúdo ja inserido</p>';
    }
}


//Query Paginador
if ($_GET['pesquisa']) {
    $pesquisa = $_GET['pesquisa'];
}
$query_paginador = mysqli_query($conn, "select id from news where id != '0' and (body like '%$pesquisa%' or title like '%$pesquisa%') order by id;");
$paginas = (mysqli_num_rows($query_paginador) / 4);

//Query Destaque
$queryHighLight = mysqli_query($conn, "select * from news where id = '0';");

//Query Posts Lista
if ($_GET['pesquisa']) {
    $pesquisa = $_GET['pesquisa'];
    if ($npage - 1 == 0) {
        $queryselectAll = "select * from news where id != '0' and (body like '%$pesquisa%' or title like '%$pesquisa%') order by id desc limit 4;";
    } else {
        $queryselectAll = "select * from news where id != '0' and (body like '%$pesquisa%' or title like '%$pesquisa%') order by id desc limit 4 offset " . 4 * ($npage - 1) . ";";
    }
} else {
    if ($npage - 1 == 0) {
        $queryselectAll = "select * from news where id != 0 order by id desc limit 4;";
    } else {
        $queryselectAll = "select * from news where id != 0 order by id desc limit 4 offset " . 4 * ($npage - 1) . ";";
    }
}
$queryPosts = mysqli_query($conn, $queryselectAll);

include '../Templates/head.php';
include "../Pages/home.php";
include '../Templates / footer . php';
