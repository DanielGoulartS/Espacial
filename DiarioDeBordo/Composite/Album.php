<?php

require_once '../Composite/Objeto.php';

class Album implements Objeto {

    public $link;
    public $capa;
    public $nome;
    public $num;
    public $imagens;

    public function __construct($link, $capa, $nome, $num, $imagens) {
        $this->link = $link;
        $this->capa = $capa;
        $this->nome = $nome;
        $this->num = $num;
        $this->imagens = $imagens;
    }

    public function getLink() {
        return $this->link;
    }

    public function getCapa() {
        return $this->capa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNum() {
        return $this->num;
    }

    public function getImagens() {
        return $this->imagens;
    }

    public function setLink($link): void {
        $this->link = $link;
    }

    public function setCapa($capa): void {
        $this->capa = $capa;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNum($num): void {
        $this->num = $num;
    }

    public function setImagens($imagens): void {
        $this->imagens = $imagens;
    }

    public function exibir() {

        echo "<form method='get' action='$this->link' style='margin: 10px;'>
                <label id='album'> 
                    <figure>
                        <img src='$this->capa' style='width:100px; height:100px;'>
                        <figcaption style='color: white;'>$this->nome</figcaption>
                    </figure>
                    <input name='album' type='submit' id='' value='$this->nome' style='visibility: hidden;'>                 
                    </input>
                </label>
            </form>";
    }

}
