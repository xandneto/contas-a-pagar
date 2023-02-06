<?php

include_once "connection.php";
$data_inicial = str_replace("-","",$_GET['data_inicial']);
$data_final = str_replace("-","", $_GET['data_final']);
$opcao = $_GET['opcao'];






if ($opcao == "Pagas")


$query = "SELECT contas_pagar.id as id,contas_pagar.valor as valor,contas_pagar.numero_doc as numero_doc,
contas_pagar.carteira as carteira,DATE_FORMAT(contas_pagar.data_compra,'%d/%m/%Y') as data_compra,
contas_pagar.descricao as descricao,
DATE_FORMAT(contas_pagar.vencimento,'%d/%m/%Y') as vencimento,fornecedores.id as id_credor,
DATE_FORMAT(contas_pagar.data_status,'%d/%m/%Y') as data_status,status.descricao as status_descricao,
fornecedores.razao_social as razao_social from contas_pagar 
inner join status        on contas_pagar.status = status.id
inner join fornecedores  on contas_pagar.id_fornecedor = fornecedores.id where contas_pagar.status=5 and 
contas_pagar.vencimento BETWEEN '$data_inicial' AND '$data_final'";

if ($opcao == "A Pagar")

$query = "SELECT contas_pagar.id as id,contas_pagar.valor as valor,contas_pagar.numero_doc as numero_doc,
contas_pagar.carteira as carteira,DATE_FORMAT(contas_pagar.data_compra,'%d/%m/%Y') as data_compra,
contas_pagar.descricao as descricao,
DATE_FORMAT(contas_pagar.vencimento,'%d/%m/%Y') as vencimento,fornecedores.id as id_credor,
DATE_FORMAT(contas_pagar.data_status,'%d/%m/%Y') as data_status,status.descricao as status_descricao,
fornecedores.razao_social as razao_social from contas_pagar 
inner join status        on contas_pagar.status = status.id
inner join fornecedores  on contas_pagar.id_fornecedor = fornecedores.id where contas_pagar.status=1 
and contas_pagar.vencimento BETWEEN '$data_inicial' AND  '$data_final'";

if ($opcao == "Todas")

$query = "SELECT contas_pagar.id as id,contas_pagar.valor as valor,contas_pagar.numero_doc as numero_doc,
contas_pagar.carteira as carteira,DATE_FORMAT(contas_pagar.data_compra,'%d/%m/%Y') as data_compra,
contas_pagar.descricao as descricao,
DATE_FORMAT(contas_pagar.vencimento,'%d/%m/%Y') as vencimento,fornecedores.id as id_credor,
DATE_FORMAT(contas_pagar.data_status,'%d/%m/%Y') as data_status,status.descricao as status_descricao,
fornecedores.razao_social as razao_social from contas_pagar 
inner join status        on contas_pagar.status = status.id
inner join fornecedores  on contas_pagar.id_fornecedor = fornecedores.id where contas_pagar.vencimento 
BETWEEN '$data_inicial' AND '$data_final'";

 

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
