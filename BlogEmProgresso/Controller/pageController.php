<?php

error_reporting(0);

echo 'PG';

require '../Controller/components.php';
$components = new components();
$conn = mysqli_connect("localhost", "newuser", "", "base") or die("Erro ao Conectar a base de dados.");

if (!isset($_GET['npage']) || $_GET['npage'] == '') {
    $npage = 1;
} else {
    $npage = $_GET['npage'];
}

$queryHighLight = mysqli_query($conn, "select * from news where id = '0';");

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

//TRAZER PARA O CONTROLLER A QUERY DO PAGINADOR E SELECT ALL

include '../Templates/head.php';
include "../Pages/home.php";
include '../Templates/footer.php';
