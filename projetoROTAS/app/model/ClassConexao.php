<?php

namespace App\Model;

use PDO;

abstract class ClassConexao{
    #Realiza a conexão com o banco de dados
    public function conexaoDB(){
        try {
            $Con = new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $Con;
        } catch (\PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}