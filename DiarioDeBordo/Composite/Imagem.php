<?php

require_once '../Composite/Objeto.php';

class Imagem implements Objeto{
    
    public $link;
    public $album;
    public $nome;
    
    public function __construct(string $link, string $album, string $nome) {
        $this->link = $link;
        $this->nome = $nome;
        $this->album = $album;
    }

    public function getLink() {
        return $this->link;
    }

    public function getAlbum() {
        return $this->album;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setLink($link): void {
        $this->link = $link;
    }

    public function setAlbum($album): void {
        $this->album = $album;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

        
    public function exibir() {
        echo "<img src='$this->link' style='max-width: 98%; max-height: 90%; margin: auto; padding: 2%;'>";
    }

}
