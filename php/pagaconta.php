<?php
include_once "connection.php";

$id = $_POST['id'];
$data_status = $_POST['data_pagamento'];
$juros = $_POST['juros'];
$multa = $_POST['multa'];
$total_pago = $_POST['total_pago'];


try {

$query = "UPDATE contas_pagar set data_status = '$data_status',status = 5,juros='$juros',
multa='$multa',total_pago='$total_pago' where id = '$id'";

if (mysqli_query($link, $query)) {
    
    mysqli_close($link);
    echo json_encode(["status"=>"sucesso"]);
    return;
    
}  
  

else


echo json_encode(["status"=>"erro ao tentar pagar"]);

} catch (Exception $e) {
    
    echo json_encode(["status"=>$e]);

   
}

/* close connection */

