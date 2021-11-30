<?php

#error_reporting(0);
//echo 'POST';

$conn = mysqli_connect("localhost", "newuser", "", "base") or die("Erro ao Conectar a base de dados.");

if ($_GET['link']) {  //PAGINA DE MATERIA
    $link = $_GET['link'];

    $queryPost = mysqli_query($conn, "select * from news where slug = '$link';");
}
if(mysqli_num_rows($queryPost) == 1){
    include '../Templates/head.php';
    include "../Pages/post.php";
    include '../Templates/semiFooter.php';
    include '../Templates/footer.php';
} else { //ERRO
    include '../Templates/head.php';
    include "../Pages/Error/404.php";
    include '../Templates/semiFooter.php';
    include '../Templates/footer.php';
}