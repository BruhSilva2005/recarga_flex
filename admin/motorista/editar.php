<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecario.php";
    require_once $_SERVER["DOCUMENT_ROOT"] ."/controllers/motoristaController.php";

    $MotoristaController = new motoristaController();
    $MotoristaController-> EditarMotorista();

    ?>

<main class="container mt-3 mb-3">
    <h1>Editar Motorista</h1>
    
    <form action="editar.php?id_motorista=<?=$motorista->id_motorista ?>" method="post" class="row g-3">
</form>
<div class="col-md-12">
            <label for="number" class="form-label">CNH</label>
            <input type="number" name="cnh" id="cnh" class="form-control" required value="<?=$motorista->cnh?>">
        </div>
        <div class="col-md-12">
            <label for="codiogo do Sindicato" class="form-label">Codigo do Sindicato</label>
            <input type="number" name="codigo do sindicato" id="codigo do sindicato" class="form-control" required>
        </div>











</main>
