<?php
include("conect.php");

$nome = $_POST["nomeCad"];
$email = $_POST["emailCad"];
$turma = $_POST["turmaCad"];
$rm = $_POST["rmCad"];
$armario = $_POST["armarioCad"];
$tamanho = $_POST["tamanhoCad"];

$True = TRUE;
$False  = FALSE;

$insertArm = "INSERT INTO tb_armario (num_armario,reservado,tamanho) VALUES ('$armario','$True','$tamanho')";

$insertUser = "INSERT INTO tb_user (rm,nome,email,turma,id_armario) VALUES ('$rm','$nome','$email','$turma','$armario')";



try{


    
    $conn->query($insertArm);
    $conn->query($insertUser);  
    echo "Cadastro realizado com sucesso";

}
catch(PDOException $e){

    echo "Não foi possivel registrar o usuario";

}








?>