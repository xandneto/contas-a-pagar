<?php
$curl = curl_init();
$headers = ["authorization:dhdhdhdhdhdhh","content-type:application/json"];
curl_setopt_array($curl,[
CURLOPT_URL=>"listcredores.php",
CURLOPT_RETURNTRANSFER=>1,
CURLOPT_POSTFIELDS=>[
    "user"=>"alexcarvalhoneto72@gmail.com","password"=>"brasil"]
]

);
$response = curl_exec($curl);
echo "<prev>";
echo (json_decode($response));
echo "</prev>";