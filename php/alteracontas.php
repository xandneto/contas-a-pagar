<?php
include_once "connection.php";
$id = $_POST['id'];
$id_credor = $_POST['id_credor'];
$valor = $_POST['valor'];
$vencimento = $_POST['vencimento'];
$descricao = $_POST['descricao'];
$documento = $_POST['documento'];
$carteira = $_POST['carteira'];
$data_compra = $_POST['data_compra'];

try {

$query = "update contas_pagar set id_fornecedor='$id_credor',valor='$valor',vencimento='$vencimento',
descricao='$descricao',numero_doc='$documento',carteira='$carteira',data_compra='$data_compra' where id='$id'";

if (mysqli_query($link, $query)) {
    
    mysqli_close($link);
    echo json_encode(["status"=>"sucesso"]);
    return;
    
}  
  

else


echo json_encode(["status"=>"erro ao tentar alterar"]);

} catch (Exception $e) {
    
    echo json_encode(["status"=>$e]);

   
}

/* close connection */

