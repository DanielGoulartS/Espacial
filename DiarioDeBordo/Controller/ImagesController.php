<?php
error_reporting(0);

//Imports Necessários
require_once '../Composite/Album.php';
require_once '../Composite/Imagem.php';
require_once '../Model/Connection.php';
require_once '../Model/Contador.php';

//Instancias Necessárias
$dbConnection = new Connection();
$contador = new Contador($dbConnection, 'Images-'.filter_input(INPUT_GET, "album"));

//Contador de acessos
$contador->Contar();

if(!session_start()){
    session_start();
}

//Recuperando todas as imagens
//A capa de cada album, deverá ser a primeira imagem com seu '$album'
$imagens = array(
    new Imagem("../Images/Estrela.png", "Geral", "1"),
    new Imagem("../Images/1Estrela.png", "Geral", "1"),
    new Imagem("../Images/Space1.jpg", "Geral", "1"),
    new Imagem("../Images/Deserto/Deserto1.jpeg", "Deserto", "2"),
    new Imagem("../Images/Deserto/Cave1.jpeg", "Deserto", "2"),
    new Imagem("../Images/Deserto/Cave2.jpeg", "Deserto", "2"),
    new Imagem("../Images/Victorian/Victoria.jpg", "Victorian", "3"),
    new Imagem("../Images/Victorian/VictoriaScene.jpg", "Victorian", "3"),
    new Imagem("../Images/Victorian/Sherlok.jpg", "Victorian", "3"),
    new Imagem("../Images/Victorian/Caitlyn.jpg", "Victorian", "3"),
    new Imagem("../Images/Victorian/Era.jpg", "Victorian", "3"),
);

//Caso haja parâmetro de album
if (filter_input(INPUT_GET, "album")) {
//Criação do album em questão
    $album = array();

    forEach ($imagens as $imagem) {
        if ($imagem->getAlbum() == filter_input(INPUT_GET, "album")) {
            array_push($album, $imagem);
        }
    }
//Atribuição a variável da view
    $albuns = $album;
//Caso não
} else {
//Com base nas imagens totais, Separa os albuns por nomes
    $titulos = array();
    $capas = array();

    forEach ($imagens as $imagem) {
        if (!in_array($imagem->getAlbum(), $titulos)) {
            array_push($titulos, $imagem->getAlbum());
            array_push($capas, $imagem->getLink());
        }
    }

//E os monta
    $imagensMatriz = array();
    $albuns = array();
    $i = 0;

    forEach ($titulos as $titulo) {
//Criação da galeria de imagens, irrelevante no momento.
        //forEach ($imagens as $imagem) {
        //    if ($titulo == $imagem->getAlbum()) {
        //        array_push($imagensMatriz, new Imagem($imagem->getLink(), $titulo, "IMG"));
        //    }
        //}
        array_push($albuns, new Album("/imagens/$titulo", $capas[$i], $titulo, $i, null));
        $imagensMatriz = array();
        $i++;
    }
}

if(empty($albuns)){
    require_once '../Templates/header.php';
    include_once '../Pages/Error/404.php';
    require_once '../Templates/semiFooter.php';
    require_once '../Templates/footer.php';
} else {
    require_once '../Templates/header.php';
    include_once '../Pages/imagens.php';
    require_once '../Templates/semiFooter.php';
    require_once '../Templates/footer.php';
}