<?php
require '../conexao.php';
//require './Produto.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
$conexao = conectar();

$sql = "SELECT * FROM tbl_paciente";

// conexao e query
$res = mysqli_query($conexao, $sql)
  or die("Erro ao tentar consultar");



//$listaProdutos = [];
$data = [];

while ($row = mysqli_fetch_assoc($res))
{
  // Use utf8_encode para codificar os valores do banco de dados
  $row = array_map('utf8_encode', $row);
  array_push($data, $row);
  //$data[] = $row;
}

$json = json_encode($data, JSON_UNESCAPED_UNICODE);

echo $json;



?>