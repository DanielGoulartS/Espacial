<?php

#error_reporting(0);

echo 'POST';


require '../Controller/components.php';
$components = new components();
$conn = mysqli_connect("localhost", "newuser", "", "base") or die("Erro ao Conectar a base de dados.");



if ($_GET['link']) {  //PAGINA DE MATERIA
    $link = $_GET['link'];


    $queryPost = mysqli_query($conn, "select * from news where slug = '$link';");

    include '../Templates/head.php';
    include "../Pages/post.php";
    include '../Templates/semiFooter.php';
    include '../Templates/footer.php';
} else { //ERRO
    $page = "../Pages/Error/404.php";
    include '../Templates/head.php';
    include "$page";
    include '../Templates/semiFooter.php';
    include '../Templates/footer.php';
}