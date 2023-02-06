<?php
include_once "connection.php";

$id_credor = $_POST['id_credor'];
$valor = $_POST['valor'];
$vencimento = $_POST['vencimento'];
$descricao = $_POST['descricao'];
$documento = $_POST['documento'];
$carteira = $_POST['carteira'];
$data_compra = $_POST['data_compra'];


try {

$query = "INSERT into contas_pagar (id_fornecedor,valor,vencimento,descricao,numero_doc,carteira,
data_compra) values ('$id_credor','$valor','$vencimento','$descricao','$documento',
'$carteira','$data_compra')";

if (mysqli_query($link, $query)) {
    
    mysqli_close($link);
    echo json_encode(["status"=>"sucesso"]);
    return;
    
}  
  

else


echo json_encode(["status"=>"erro ao tentar incluir"]);

} catch (Exception $e) {
    
    echo json_encode(["status"=>$e]);

   
}

/* close connection */

