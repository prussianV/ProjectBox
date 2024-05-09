<?php
include("conect.php");

$select = "SELECT * FROM tb_armario";

$stmt = $conn->prepare($select);
$stmt->execute();


$myArray = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   
    $arm = $row["num_armario"];

    array_push($myArray,(int)$arm);

    

}

for($i=0;$i<count($myArray);$i++){

//echo $myArray[$i];

}

//print_r($myArray);
//var_dump($myArray);

echo json_encode($myArray);

//var_dump($myArray);

?>