<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecario.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/controllers/motoristaController.php";
require_once $_SERVER["'DOCUMENT_ROOT"] ."/models/motorista.php";

if(isset($_GET["del"])&& !empty($_get['id_motorista'])){

    $MotoristaController = new motoristaController();
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

                    $motorista = $motoristaController->listarMotoristas();

                    //var_dump($motoristas);

                    foreach($motorista as $motoristas):
                ?>

                <tr>

                <td><?=$motorista->id_motorista?></td>
                <td><?=$motorista->CNH?></td>
                <td><?=$motorista->Codigodosindicato?></td>
                <td>
                    <a href="editar.php?id_motorista=<?=$motorista->id_motorista?>" class="btn btn-primary">Editar</A>
                    <a href = "index.php?id_motorista=<?=$motorista->id_motorista?>" class="btn btn-primary">Excluir</a>
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