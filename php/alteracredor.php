<?php
include_once "connection.php";
$id= $_POST['id'];
$razao_social = $_POST['razao_social'];
$e_mail = $_POST['e_mail'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cnpj = $_POST['cnpj'];
$cep = $_POST['cep'];

try {

$query = "UPDATE fornecedores set razao_social='$razao_social',e_mail='$e_mail',logradouro='$logradouro',
numero='$numero',complemento='$complemento',bairro='$bairro',cidade='$cidade',
estado='$estado',cnpj='$cnpj' where id='$id'";

if (mysqli_query($link, $query)) {
    
    mysqli_close($link);
    echo json_encode(["status"=>"sucesso"]);
    return;
    
}  
  

else


echo json_encode(["status"=>"erro ao tentar alterar"]);

} catch (Exception $e) {
    
    echo json_encode(["status"=>"erro ao tentar incluir"]);

   
}

/* close connection */

?>