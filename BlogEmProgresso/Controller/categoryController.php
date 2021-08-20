<?php
error_reporting(0);

echo 'Category';
if($_GET['categ']){  //PAGINA DE CATEGORIA
    $categ = $_GET['categ'];
            
    include '../Templates/head.php';
    include "../Pages/category-list.php";
    include '../Templates/semiFooter.php';
    include '../Templates/footer.php';
    
}else{ //ERRO
    include '../Templates/head.php';
    include "../Pages/Error/404.php";
    include '../Templates/semiFooter.php';
    include '../Templates/footer.php';
}