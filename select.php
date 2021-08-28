<?php 
include 'conectar.php';

    header('Content-Type: application/json');
    
    $sql = $conectar->prepare("  
      SELECT 
        nome,
        email,
        FROM_BASE64(cpf) as cpf,
        valor_investido, 
        valor_com_juros
      FROM investimento
    ");
    $sql->execute();
    $result = $sql->execute();

    if($sql->rowCount() >= 1){
      
        echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
    } else {
        echo json_encode('Nenhum dado encontrado');
    }

    
?>