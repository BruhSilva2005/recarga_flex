<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/models/motorista.php";

class motoristaController{

    private $motoristaModel;

    public function __construct()
    {
        $this->motoristaModel= new motoristaController();
    }

    public function listarmotorista(){
        return $this->motoristaModel->listarMotoristas();
    }
    public function cadastrarmotorista(){
            if($_SERVER['REQUEST_METHOD'] ==='POST'){
    
               $dados =[
                'cnh'=>$_POST['cnh'],
                'codigo_sindicato'=>$_POST['codigo-sindicato'],
               ];
    
               $this->motoristaModel->cadastrarmotorista($dados);
    
               header('Location: index.php');   
               exit;
    
    
            }
    }

    public function EditarAluno(){{
        $id_aluno = $_GET['id_aluno'];
        if($_SERVER['REQUEST_METHOD'] ==='POST'){

            $dados =[
                'nome'=>$_POST['nome'],
                'cpf'=>$_POST['cpf'],
                'email'=>($_POST['email']),
                'telefone'=>$_POST['telefone'],
                'celular'=>$_POST['celular'],
                'data_nascimento'=>$_POST['data_nascimento']
               ];

           $this->alunoModel->editar($id_aluno,$dados);

          header('Location: index.php');   
           exit;
        }
        return $this->alunoModel->buscar($id_aluno);
    }
    }
    public function excluirAluno(){

        $this->alunoModel->excluir($_GET['id_aluno']);

        header('location: index.php');
        exit;

    }


}