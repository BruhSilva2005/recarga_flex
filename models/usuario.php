<?php  
        require_once $_SERVER['DOCUMENT_ROOT'] . "/database/DBConexao.php";

class usuario{
    protected $db;
    protected $table = "usuario";

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }


    public function buscar($id){
        try {
            $sql = ("SELECT * FROM {$this->table} WHERE id_usuario = :id");
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt ->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Erro na busca!" . $e->getMessage();
            return null;
        }
    }

public function listar(){
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
        public function cadastrar($dados){
            try{
                 $query= "INSERT INTO {$this->table} (nome, sobrenome, email, cpf, telefone, senha, perfil) VALUES (:nome, :sobenome, :email, :cpf, :telefone, :senha, :perfil)";
                 $stmt = $this->db-> prepare($query);
                 $stmt->bindParam(':nome',$dados['nome']);
                 $stmt->bindParam(':sobrenome',$dados['sobrenome']);
                 $stmt->bindParam(':email',$dados['email']);
                 $stmt->bindParam(':cpf',$dados['cpf']);
                 $stmt->bindParam(':telefone',$dados
                 ['telefone']);
                 $stmt->bindParam(':senha',$dados
                 ['senha']);
                 $stmt->bindParam(':perfil',$dados
                 ['perfil']);

                 $stmt->execute();
                 $_SESSION['sucesso'] = "Cadastro com Sucesso";

                 return true;
                 
            }catch(PDOException $e){
                 echo "Erro ao Cadastrar" .$e -> getMessage();

                 $_SESSION['erro'] = "Erro ao cadastrar usuario";

                 return false;   
            }
}

public function editar($id,$dados){
    
    try{
        $sql = "UPDATE {$this -> table} SET nome=:nome cpf = :cpf ,email =:email , telefone = :telefone ,celular= :celular ,data_nascimento = :data_nascimento WHERE id_aluno = :id";
        $stmt =$this-> db->prepare($sql);
        $stmt->bindParam(':name',$dados['nome']);
        $stmt->bindParam(':sobrenome',$dados['sobrenome']);
        $stmt->bindParam(':email',$dados['email']);
        $stmt->bindParam(':cpf',$dados['cpf']);
        $stmt->bindParam(':telefone',$dados['telefone']);
        $stmt->execute();
        return true;
    }catch(PDOException $e){
        echo"Erro na preparacao da consulta: ".$e-> getMessage();
        return false;
    }       
}
public function excluir($id){

    try{
        $sql = "DELETE FROM {$this->table} where id_alunos=:id";
        $stmt = $this -> db-> prepare($sql);
        //passagem de parametros e execução do sql
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
    }catch(PDOException $e){
        echo"Erro ao excluir dado" .$e->  getMessage();
    }   
}
}