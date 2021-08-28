<?php 

try {
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=xcapital","root","");
} catch(PDOException $e){
    echo "Falha na conexão" . $e.getMessage();
}