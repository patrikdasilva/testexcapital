<?php 
include 'conectar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Teste x capital</title>
</head>
<body>
    <div class="container">
        <h1>Formulário</h1>
    <form class="formulario" id="form">
        <div class="mb-3">
        <label for="nome" class="form-label"> Nome </label>
        <input type="text" class="form-control" name="nome" id="nome"
        placeholder="Exemplo: Patrik da silva">
        </div>
        <div class="mb-3">
        <label for="email" class="form-label"> Email </label>
        <input type="email" class="form-control" name="email" id="email"
        placeholder="Exemplo: exemplo@gmail.com">
        </div>
        <div class="mb-3">
        <label for="cpf" class="form-label"> CPF </label>
        <input type="text" class="form-control" name="cpf" id="cpf" max-length="14"
        placeholder="Exemplo: 000.000.000-00">
        </div>
        <div class="mb-3">
        <label for="valor" class="form-label"> Valor a investir </label>
        <input type="float" class="form-control" name="valor" id="valor"
        placeholder="Exemplo: 1000,50">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    </div>
  

    <script src="jquery/jquery-3.6.0.js"></script>
    <script src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <script src="dados.js"></script>
</body>
</html>