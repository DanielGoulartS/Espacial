<?php
require_once '../Model/Connection.php';

class Contador {

    private $dbConnection;
    private $pageName;

    public function __construct(Connection $dbConnection, string $pageName) {
        $this->dbConnection = $dbConnection;
        $this->pageName = $pageName;
    }

    public function Contar() {
//Contagem
        $queryCount = $this->dbConnection->Query("Select acessos from Acessos where nome = '$this->pageName';");
        $count = mysqli_fetch_array($queryCount)['acessos'];
        echo $arrayCount['acessos'];
        if (mysqli_num_rows($queryCount)) {
            $this->dbConnection->Query("UPDATE Acessos SET `acessos`= '" . ($count+1)
                    . "' WHERE nome = '$this->pageName';");
        }else{
            $this->dbConnection->Query("INSERT INTO `acessos`(`nome`, `acessos`)"
                    . " VALUES ('".$this->pageName."',1);");
        }
    }

}
