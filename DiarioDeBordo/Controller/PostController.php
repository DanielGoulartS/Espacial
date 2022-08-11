<?php
error_reporting(0);
//echo 'POST';

require_once '../Model/Connection.php';
require_once '../Model/Contador.php';

//Instancias Necessárias
$dbConnection = new Connection();
$contador = new Contador($dbConnection, 'Post-'.filter_input(INPUT_GET, "link"));

//Contador de acessos
$contador->Contar();

if (filter_input(INPUT_GET, "link")) {  //PAGINA DE MATERIA
    //Fazendo atualização caso tenha
    $link = filter_input(INPUT_GET, "link");

    $queryPost = $dbConnection->Query("select * from news where slug = '$link';");
    $result = mysqli_fetch_array($queryPost);

    if (filter_input(INPUT_POST, "newSlug")) {
        $newSlug = filter_input(INPUT_POST, "newSlug");
        $newTitle = addcslashes(filter_input(INPUT_POST, "newTitle"), "'");
        $newBody = addcslashes(filter_input(INPUT_POST, "newBody"), "'");

        $dbConnection->Query("UPDATE `news` SET `title`='$newTitle',`slug`='$newSlug',`body`='$newBody' WHERE"
                . " `id` = " . $result['id'] . ";");

        unset($_POST["newSlug"]);
        unset($_POST["newTitle"]);
        unset($_POST["newBody"]);
        
        header('Location: ' . "/post/$newSlug");
    }
}

//Apenas exibindo a pagina
if (mysqli_num_rows($queryPost) == 1) {
    include_once '../Templates/header.php';
    include_once "../Pages/post.php";
    include_once '../Templates/semiFooter.php';
    include_once '../Templates/footer.php';
} else { //ERRO
    include_once '../Templates/header.php';
    include_once "../Pages/Error/404.php";
    include_once '../Templates/semiFooter.php';
    include_once '../Templates/footer.php';
}    