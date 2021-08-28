<?php 
include 'conectar.php';

    header('Content-Type: application/json');

    $nome = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);
    $cpf = filter_var($_POST['cpf']);
    $valor = filter_var($_POST['valor']);
    $valor_juros = filter_var($_POST['valor_com_juros']);

    $sql = $conectar->prepare("  
        INSERT INTO investimento (nome,email,cpf,valor_investido, valor_com_juros)
        VALUES (:nome, :email, TO_BASE64(:cpf), :valor, :valor_com_juros)
    ");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':valor_com_juros', $valor_juros);

    $sql->execute();

    if($sql->rowCount() >= 1){
        echo json_encode('Cadastrado');
    } else {
        echo json_encode('Falha no cadastro');
    }

    
?>