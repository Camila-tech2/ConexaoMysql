<?php
require '../conexao.php';
$conexao = conectar();

$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];

$query = "DELETE FROM `tbl_paciente`
          WHERE `id` = $id;";
$inseriu = mysqli_query($conexao, $query) or die("Não inserido");

if ($inseriu == 1)
{
  echo 'Registro deletado com sucesso <BR>';
  echo "O registro com  id = $id foi apagado com sucesso";
}
else
{
  echo "Registro não apagado.";
}
fecharConexao($conexao);

?>