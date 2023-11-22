<?php
require '../conexao.php';
$conexao = conectar();

$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];
$senha = $_POST['senha'];

$query = "UPDATE `tbl_paciente`
          SET `senhaPaciente` = '$senha'
          WHERE `tbl_paciente`.`id` = $id;";
$inseriu = mysqli_query($conexao, $query) or die("Não inserido");

if ($inseriu == 1)
{
  echo 'Registro editado com sucesso <BR>';
  echo "Seu Registro com id = $id possui uma nova senha - $senha";
}
else
{
  echo "Dado não editado";
}
fecharConexao($conexao);
?>