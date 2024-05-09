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

<a href="ClOcupacao.php">Concluir ocupação</a><br><a href="VerificarArmarios.php">Verificar armarios</a><br><a href="ModificarArmarios.php">Modificar armarios</a>

<button onclick="Sair()">Sair</button>

</body>
<script>

    function Sair(){
        
       <?php //session_destroy(); ?>
       window.location.href = "index.html"

    }

</script>
</html>