<?php

$nome = "Guilherme";

function teste() {

    global $nome;
    echo $nome;



}
function teste2() {

   $nome = "Andressa";
   echo $nome ." ". "agora no teste 2";


}

teste();

teste2();

?>