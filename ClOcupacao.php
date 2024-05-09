<?php
include("/sistem/conect.php");
session_start();

if(isset($_SESSION['NomeAdm']) == 0){
    echo "<meta http-equiv='refresh' content='0; URL=index.html'/>";
}

$userLog = $_SESSION['NomeAdm'];
$senhaLog = $_SESSION['SenhaAdm'];

echo $userLog;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Concluir ocupação</h1>
    <p>Qual armario deseja concluir? <input type="text" id='armPag'></p> 

    
    <p>Como foi feito o pagamento?
        <select id="formaPag">
            <Option value="Pix">Pix</Option>
            <Option value="Dinheiro">Dinheiro</Option>
            <Option value="Boleto">Boleto</Option>
            <Option value="Débito">Cartão de crédito</Option>
            <Option value="Crédito">Cartão de débito</Option>
        </select>
    </p>
    <p>Quando foi efetuado o pagamento? <input type="date" id='dataPag'></p>
    <p>Definir validade do armário <input type="date" id='validadePag'></p>
    <p>Inserir comprovante (opcional) <input type="file" id='comprovantePag'></p>
    <button id='button'>Concluir ocupação</button><br><br>
    
    <a href="painelAdm.php">Voltar</a>
</body>
<script src='js/scriptConcluir.js'></script>
</html>