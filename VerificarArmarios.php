<?php
include("/sistem/conect.php");
session_start();

//var_dump($_SESSION);

if(isset($_SESSION['NomeAdm']) == 0){
    echo "<meta http-equiv='refresh' content='0; URL=index.html'/>";
}

$userLog = $_SESSION['NomeAdm'];
$senhaLog = $_SESSION ['SenhaAdm'];

$select = "SELECT * FROM tb_armario";

$stmt = $conn->prepare($select);
$stmt->execute();

//$user = json_encode($stmt->fetch(PDO::FETCH_ASSOC));

while($arm = $stmt->fetch(PDO::FETCH_OBJ)){

    $reservArm[] = $arm->reservado;
    $validadeArm[] = $arm->validade;
    $pagamentoArm[] = $arm->data_pagamento;
    $tamanhoArm[] = $arm->tamanho;

}

$select = "SELECT * FROM tb_user order by id_armario;";

$stmt = $conn->prepare($select);
$stmt->execute();

while($user = $stmt->fetch(PDO::FETCH_OBJ)){

    $rmUser[] = $user->rm;
    $nomeUser[] = $user->nome;
    $email[] = $user->email;
    $turma[] = $user->turma;
    $numArm[] = $user->id_armario;

}

//echo json_encode($numArm, JSON_UNESCAPED_UNICODE);
//echo json_encode($rmUser, JSON_UNESCAPED_UNICODE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleRegistros.css">
</head>
<body>

<div id="body">
<h1>Registros de armarios dos alunos</h1>
    <div class="filho" id='filho'>


    </div>
    <a href="painelAdm.php">Voltar</a>
</div>
</body>
<script>


//informações dos armarios
var arrayNum_Armarios = <?php echo json_encode($numArm, JSON_NUMERIC_CHECK);?>;
var arrayReserva = <?php echo json_encode($reservArm, JSON_NUMERIC_CHECK);?>;
var arrayRm = <?php echo json_encode($rmUser, JSON_NUMERIC_CHECK);?>;
var arrayUser = <?php echo json_encode($nomeUser);?>;
var arrayEmailUser = <?php echo json_encode($email);?>;
var arrayTurma = <?php echo json_encode($turma);?>;
var arrayTamanho = <?php echo json_encode($tamanhoArm);?>;
var arrayDataPagamento = <?php echo json_encode($pagamentoArm);?>;
var arrayValidade = <?php echo json_encode($validadeArm);?>;



var arrayReservaV = []

for(i = 0; i < arrayNum_Armarios.length;i++){
    
    if(arrayReserva[i] == "1"){

        arrayReservaV[i] = "Reservado"        

    }else{

        arrayReservaV[i] = "Ocupado"

    }

    document.getElementById('filho').innerHTML += `<div class='neto'><p class='armP'>Armário número: ${arrayNum_Armarios[i]}</p><p>Situação do armario: ${arrayReservaV[i]}</p><p>Dono do armario: ${arrayUser[i]}</p><p>Rm do aluno: ${arrayRm[i]}</p><p>Turma do aluno: ${arrayTurma[i]}</p><p>Email do aluno: ${arrayEmailUser[i]}</p><p>Tamanho do armario: ${arrayTamanho[i]}</p><p>Data de pagamento: </p><p>Validade do armário: </p><button name='botao'>Excluir</button></div>`

    // var buttons = document.getElementsByName('botao');

    // buttons[i].addEventListener('click',function(){

    // });
}
</script>



</html>