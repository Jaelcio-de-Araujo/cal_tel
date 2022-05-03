<?php
require_once 'connection.php';

$telefone  = trim(filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_SPECIAL_CHARS));

$query = "INSERT INTO cad_tel(telefone) VALUES(:telefone)";
$stmt = $conn->prepare($query);
$stmt -> execute(['telefone'=>$telefone]);