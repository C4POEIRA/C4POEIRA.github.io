<?php
$hostname = "localhost";
$bancodedados = "agenda_ads";
$usuariobd = "root";
$senhabd = "";

$mysqli = new mysqli($hostname,$usuariobd, $senhabd, $bancodedados);

if($mysqli->connect_errno){
    echo "Ocorreu um erro ao acessar essa página: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
}


function formatar_data($data){
    return implode('/', array_reverse(explode('-', $data)));
}