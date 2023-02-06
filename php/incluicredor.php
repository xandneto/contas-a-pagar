<?php
include_once "connection.php";
$razao_social = $_POST['razao_social'];
$e_mail = $_POST['e_mail'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cnpj = $_POST['cnpj'];

try {

$query = "INSERT into fornecedores (razao_social,e_mail,logradouro,numero,complemento,bairro,
cidade,estado,cnpj) values ('$razao_social','$e_mail','$logradouro','$numero','$complemento',
'$bairro','$cidade','$estado','$cnpj')";

if (mysqli_query($link, $query)) {
    
    mysqli_close($link);
    echo json_encode(["status"=>"sucesso"]);
    return;
    
}  
  

else


echo json_encode(["status"=>"erro ao tentar incluir"]);

} catch (Exception $e) {
    
    echo json_encode(["status"=>"erro ao tentar incluir"]);

   
}

/* close connection */

?>