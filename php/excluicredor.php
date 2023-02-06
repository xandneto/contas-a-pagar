<?php
include_once "connection.php";
$id= $_POST['id'];


try {

$query = "delete from fornecedores where id='$id'";

if (mysqli_query($link, $query)) {
    
    mysqli_close($link);
    echo json_encode(["status"=>"sucesso"]);
    return;
    
}  
  

else


echo json_encode(["status"=>"erro ao tentar excluir"]);

} catch (Exception $e) {
    
    echo json_encode(["status"=>"erro ao tentar excluir"]);

   
}

/* close connection */

?>