<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/models/motorista.php";


class MotoristaController{

    private $motoristaModel;

    public function __construct()
    {
        $this->motoristaModel= new Motorista();
    }

    public function listarMotorista(){
        return $this->motoristaModel->listarMotorista();
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

    public function EditarMotorista(){{
        $id_motorista = $_GET['id_motorista'];
        if($_SERVER['REQUEST_METHOD'] ==='POST'){

            $dados =[
                'cnh'=>$_POST['cnh'],
                'cnpj'=>$_POST['cnpj'],
               ];

           $this->motoristaModel->EditarMotorista($id_motorista,$dados);

          header('Location: index.php');   
           exit;
        }
        return $this->motoristaModel->buscarMotorista($id_motorista);
    }
    }
    public function excluirmotorista(){

        $this->motoristaModel->excluirmotorista($_GET['id_motorista']);

        header('location: index.php');
        exit;

    }


}