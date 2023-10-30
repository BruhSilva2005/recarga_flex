<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecario.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/controllers/motoristaController.php";
require_once $_SERVER["'DOCUMENT_ROOT"] ."/models/motorista.php";

$MotoristaController = new motoristaControllers();

$MotoristaController -> cadastrarMotorista();

?>

<main class="container mt-3 mb-3">
    <h1>Cadastrara Motorista</h1>

    <form action="cadastrar-motorista.php" method="post" class="row g-3">
        <div class="col-md-12">
            <label for="cnh" class="form-label">CNH</label>
            <input type="number" name="cnh" id="cnh" class="form-control" required>
        </div>
        <div class="col-md-12">
            <label for="codiogo do Sindicato" class="form-label">Codigo do Sindicato</label>
            <input type="number" name="codigo do sindicato" id="codigo do sindicato" class="form-control" required>
        </div> 
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="index.php"class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</main>
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>