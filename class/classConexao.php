<?php
//estudar composer
abstract class ClassConexao{
    protected function conectaDB()
    {
        try {
           $Con=new PDO("mysql:host=localhost;dbname=ead","root","");
           return $Con;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}
?>