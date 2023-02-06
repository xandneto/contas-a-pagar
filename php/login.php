<?php
include_once "connection.php";
$usuario = $_GET['user'];
$senha = $_GET['password'];


$query = "SELECT nome,login,tipo,perfil,foto FROM usuarios where login =  '$usuario' and password = '$senha'";


if ($result = mysqli_query($link, $query)) {

	

    // fetch associative array 
   if ($row = mysqli_fetch_row($result)) 
    
     {
        mysqli_free_result($result);

        $validade = time() + 30;
        $return =json_encode(["nome"=>$row[0],"tipo"=>$row[2],"perfil"=>$row[3],"foto"=>$row[4]]);
        echo $return;
        mysqli_close($link);
            
    // close connection 

}
else
{
    echo json_encode(["nome"=>"usuario ou senha invalida"]);
    mysqli_close($link);
}
 
}
 
