<?php
session_start();
include("conect.php");


$userLog = $_POST["userLog"];
$senhaLog = $_POST["senhaLog"];


$select = "SELECT * FROM tb_adm WHERE username = :username AND senha = :senha";

$stmt = $conn->prepare($select);
$stmt->bindParam(':username', $userLog);
$stmt->bindParam(':senha', $senhaLog);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['NomeAdm'] = $userLog;
    $_SESSION['SenhaAdm'] = $senhaLog;
    
    echo "<meta http-equiv='refresh' content='1; URL=painelAdm.php'/>";
} else {
    echo "<script>alert('usuario ou senha invalida!');</script>";
}
