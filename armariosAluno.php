<?php
include("/sistem/conect.php");

$select = "SELECT * FROM tb_armario";

$stmt = $conn->prepare($select);
$stmt->execute();

$myArray = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $arm = $row["num_armario"];
    array_push($myArray,(int)$arm);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Armarios</title>
</head>

<body>
    <div id="pai">
        <div id="filho">
            <div class="linha">
                <div class="quad">1</div>
                <div class="quad">2</div>
                <div class="quad">3</div>
                <div class="quad">4</div>
                <div class="quad">5</div>
                <div class="quad">6</div>
            </div>
            <div class="linha">
                <div class="quad">7</div>
                <div class="quad">8</div>
                <div class="quad">9</div>
                <div class="quad">10</div>
                <div class="quad">11</div>
                <div class="quad">12</div>
            </div>
            <div class="linha">
                <div class="quad">13</div>
                <div class="quad">14</div>
                <div class="quad">15</div>
                <div class="quad">16</div>
                <div class="quad">17</div>
                <div class="quad">18</div>
            </div>
            <div class="linha">
                <div class="quad">19</div>
                <div class="quad">20</div>
                <div class="quad">21</div>
                <div class="quad">22</div>
                <div class="quad">23</div>
                <div class="quad">24</div>
            </div>
          <button onclick="SalvarAluno()">Salvar Armario</button>  
          
        </div>
    </div>
    <p id="resposta"></p>
    <p id="res"><a href="index.html">Fazer Login como Funcionário</a></p>

</body>

<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>
<script>

var myArray = <?php echo json_encode($myArray)?>

myArray.forEach(item => {
   
    var quad = document.getElementsByClassName("quad");
    quad[item-1].classList.add('reservado')


});




for(i=0;i<myArray.length;i++){
    
    
}


</script>

</html>