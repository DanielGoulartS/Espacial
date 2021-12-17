<?php

class connection {

    public $host;
    public $usuario;
    public $senha;
    public $base;

    public function connect() {
        $host = 'localhost';
        $usuario = 'newuser';
        $senha = '';
        $base = 'base';

        $conn = mysqli_connect($host, $usuario, $senha, $base) or die("Erro ao Conectar a base de dados.");
        return $conn;
    }

}
