<?php  
        require_once $_SERVER['DOCUMENT_ROOT'] . "/database/DBConexao.php";

class Motorista{
    protected $db;
    protected $table = "motorista";

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }


    public function buscarMotorista($id){
        try {
            $sql = ("SELECT * FROM {$this->table} WHERE id_motorista = :id");
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt ->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Erro na inserção!" . $e->getMessage();
            return null;
        }
    }

public function listarMotorista(){
    try{
        $sql = "SELECT * FROM {$this->table}";
        $stmt= $this ->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    catch(PDOException $e){
        echo "Erro ao listar: " .$e -> getMessage();
        return null;
    }
}       
        public function cadastrarmotorista($dados){
            try{
                $query= "INSERT INTO {$this->table} (cnh,cnpj)
                VALUES(:cnh,:cnpj)";
                $stmt = $this->db-> prepare($query);
                 $stmt->bindParam(':cnh',$dados['cnh']);
                 $stmt->bindParam(':cnpj',$dados['cnpj']);
                 $stmt->execute();
                 return true;
            }catch(PDOException $e){
                 echo "erro na preparação da consulta:" .$e -> getMessage();
                 return false;   
            }
}

public function EditarMotorista($id,$dados){
    
    try{
        $sql = "UPDATE {$this -> table} SET cnh=:cnh cnpj = :cnpj WHERE id_motorista = :id";
        $stmt =$this-> db->prepare($sql);
        $stmt->bindParam(':cnh',$dados['cnh']);
        $stmt->bindParam(':cnpj',$dados['cnpj']);
        $stmt->execute();
        return true;
    }catch(PDOException $e){
        echo"Erro na preparacao da consulta: ".$e-> getMessage();
        return false;
    }       
}
public function excluirmotorista($id){

    try{
        $sql = "DELETE FROM {$this->table} where id_motorista=:id";
        $stmt = $this -> db-> prepare($sql);
        //passagem de parametros e execução do sql
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
    }catch(PDOException $e){
        echo"Erro ao excluir dado" .$e->  getMessage();
    }   
}
}