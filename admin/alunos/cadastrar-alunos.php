<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecario.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/alunoController.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/models/aluno.php";


    $AlunoController = new AlunoController();

    $AlunoController ->cadastrarAlunoS();
    

?>

<main class="container mt-3 mb-3">
    <h1>Cadastro do Aluno</h1>

    <form action="cadastrar-alunos.php" method="post" class="row g-3">
        <div class="col-md-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="col-md-12">
            <label for="Sobrenome" class="form-label">Sobrenome</label>
            <input type="text" name="Sobrenome" id="Sobrenome" class="form-control" required>
        </div> 
        <div class="col-md-6">
            <label for="email" class="form=label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form=label">cpf</label>
            <input type="number" name="cpf" id="cpf" class="form-control"required>
        </div>
       
        <div class="col-md-6">
            <label for="phone" class="form=label">telefone</label>
            <input type="number" name="telefone" id="telefone " class="form-control"required>
        </div>
        <div class=col-md-6>
            <label for="password" class="form-label">senha</label>
            <select name="password" class="form-select" id="password"required>
            </select>
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