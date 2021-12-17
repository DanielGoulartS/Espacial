<?php

error_reporting(0);
//echo 'POST';

require '..\Controller\connection.php';
$conn = new connection();
$conn = $conn->connect();


if ($_GET['link']) {  //PAGINA DE MATERIA
    $link = $_GET['link'];

    $queryPost = mysqli_query($conn, "select * from news where slug = '$link';");
    $result = mysqli_fetch_array($queryPost);
    if(isset($_POST['newSlug'])) {
        $newSlug = $_POST['newSlug'];
        $newTitle = addcslashes($_POST['newTitle'],"'");
        $newBody = addcslashes($_POST['newBody'],"'");
        
        mysqli_query($conn, "UPDATE `news` SET `title`='$newTitle',`slug`='$newSlug',`body`='$newBody' WHERE `id` = ". $result['id'] .";");

        unset($_POST['newSlug']);
        unset($_POST['newTitle']);
        unset($_POST['newBody']);
        
        header('Location: '."/post/$newSlug");
    }
}
if (mysqli_num_rows($queryPost) == 1) {
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