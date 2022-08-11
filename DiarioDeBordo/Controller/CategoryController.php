<?php
error_reporting(0);
//echo 'Category';

//Listar Categorias , não pronto
$queryLista = $dbConnection->Query("select * from news where category == '$categ';"); 

if(filter_input(INPUT_GET, "categ")){  //PAGINA DE CATEGORIA
    $categ = filter_input(INPUT_GET, "categ");
            
    include_once '../Templates/header.php';
    include_once "../Pages/category-list.php";
    include_once '../Templates/semiFooter.php';
    include_once '../Templates/footer.php';
    
}else{ //ERRO
    include_once '../Templates/header.php';
    include_once "../Pages/Error/404.php";
    include_once '../Templates/semiFooter.php';
    include_once '../Templates/footer.php';
}