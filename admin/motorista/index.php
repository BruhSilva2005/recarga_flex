<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecario.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/controllers/MotoristaController.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/models/motorista.php";

if(isset($_GET["del"])&& !empty($_get['id_motorista'])){

    $motoristaController = new motoristaController();
    $MotoristaController->excluirmotorista();
} 
?>

<main class=" container mt-3 mb-3">
          <h1>Lista de motoristas</h1>

          <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>CNH</th>
                    <th>Codigo do Sindicato</th> 
                    <th style = "width: 200px;">Ação</th>           
                </tr>
            </thead>
            <tbody>
                <?php

                    $motoristaController = new MotoristaController();

                    $motorista = $motoristaController->listarMotorista();

                   // var_dump($motoristas);

                    foreach($motorista as $moto):
                ?>

                <tr>

                <td><?=$moto->id_motorista?></td>
                <td><?=$moto->CNH?></td>
                <td><?=$moto->Codigodosindicato?></td>
                <td>
                    <a href="editar.php?id_motorista=<?=$moto->id_motorista?>" class="btn btn-primary">Editar</A>
                    <a href = "index.php?id_motorista=<?=$moto->id_motorista?>" class="btn btn-primary">Excluir</a>
                </td>       
            </tr>
            <?php
            endforeach;
            ?>   
            </tbody>
          </table>
    </main>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
    ?>