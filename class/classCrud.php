<?php
include("{$_SERVER['DOCUMENT_ROOT']}/ptcc/Class/ClassConexao.php");
 
class ClassCrud extends ClassConexao{
    
    #atributos
    private $Crud;
    private $Contador;

    #preparação das declarativas
    private function preparedStatements($Query,$Parametros)
    {
        $this->countParametros($Parametros);
        $this->Crud=$this->conectaDB()->prepare($Query);
        
        if($this->Contador >0){
            for($i=1; $i<= $this->Contador; $i++){
                $this->Crud->bindValue($i,$Parametros[$i-1]);

            }
        }
        $this->Crud->execute();
    }

    #contador de parametros
    private Function countParametros($Parametros){
        $this->Contador=count($Parametros);
    }

    #Inserção no Banco de Dados
    public function insertDB($Tabela , $Condicao , $Parametros){
    $this->preparedStatements("INSERT into {$Tabela} values ({$Condicao})" , $Parametros);
    return $this->Crud;
    }

    #seleção no Banco de Dados
    public function selectDB($Campos , $Tabela , $Condicao , $Parametros){
        $this->preparedStatements("SELECT{$Campos} FROM {$Tabela} {$Condicao}" , $Parametros);
        return $this->Crud;
    }

    #Deletar dados no DB
    public function deleteDB($Tabela , $Condicao , $Parametros){
    $this->preparedStatements("DELETE from {$Tabela} where {$Condicao}" , $Parametros);
    return $this->Crud;
    }

    #Atualização no banco de dados
    public function updateDB($Tabela , $Set , $Condicao , $Parametros){
    $this->preparedStatements("UPDATE {$Tabela} set {$Set} where {$Condicao}",$Parametros);
    return $this->Crud;
    }
}
?>