<?php
require_once './Album.php';
require_once './Imagem.php';

$imagem1 = new Imagem("https://i.imgur.com/AllwZ65.jpeg", "Deserto", "Areias");
$imagem2 = new Imagem("https://i.imgur.com/leHoQbt.jpeg", "Deserto", "Cave1");
$imagem3 = new Imagem("https://i.imgur.com/Lzkazau.jpeg", "Deserto", "Cave2");
$album = array($imagem1, $imagem2, $imagem3);


$album1 = new Album("zxc", "https://i.imgur.com/AllwZ65.jpeg", "Deserto", $album);

$album1->exibir();

foreach($album1->imagens as $imagem){
    $imagem->exibir();
}