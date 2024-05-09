<?php
$host = "localhost";
$dbname = "Banco_Armario";
$user = "root";
$pass = "usbw";

try{

    $conn = new PDO('mysql:host=' . $host . ';port=3306' . ';dbname=' . $dbname,$user,$pass);
    //echo 'console.log("Conexão com o banco executada dados com sucesso")';

}catch (PDOException $e){

    echo '<script>Erro ao conectar com o MYSQL: ' . $e->getMessage() . "</script>";
    break;

}

?>