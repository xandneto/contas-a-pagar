<?php

include_once "connection.php";
$query = "SELECT id,razao_social,cnpj,logradouro,complemento,numero,
bairro,cidade,estado,cep,e_mail,contato,celular_contato from fornecedores order by razao_social";


if ($result = mysqli_query($link, $query)) {

	
    // fetch associative array 
    $return= [];
    mysqli_close($link);
   while ($row = mysqli_fetch_assoc($result)) {

    array_push($return,$row);
    }
echo json_encode(["status"=>"sucesso","dados"=>$return]); 

}
else
{mysqli_close($link);
    echo json_encode(["status"=>"erro","message"=>"Nao Existem Fornecedores Cadastrados"]);
    
}
