<?php
require '../conexao.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
$_POST = json_decode(file_get_contents('php://input'), true);

$conexao = conectar();
$nomePaciente = $_POST['nomePaciente'];
$senhaPaciente = $_POST['senhaPaciente'];
$enderecoPaciente = $_POST['enderecoPaciente'];
$telefonePaciente = $_POST['telefonePaciente'];
$numeroBeneficiario = $_POST['numeroBeneficiario'];
$doencasPrevias = $_POST['doencasPrevias'];
$remedioDeUsoContinuo = $_POST['remedioDeUsoContinuo'];

$query = "INSERT INTO `tbl_paciente` (`nomePaciente`, `senhaPaciente`, `enderecoPaciente`, `telefonePaciente`, `numeroBeneficiario`, `doencasPrevias`, `remedioDeUsoContinuo`)
          VALUES ('$nomePaciente', '$senhaPaciente', '$enderecoPaciente', $telefonePaciente, $numeroBeneficiario, '$doencasPrevias', '$remedioDeUsoContinuo');";
$inseriu = mysqli_query($conexao, $query) or die("Não inserido");

if ($inseriu == 1)
{
  echo 'Registro inserido com sucesso <br>';
  echo "Seu Nome = $nomePaciente e o número beneficiário = $numeroBeneficiario";
}
else
{
  echo "Dados não inseridos";
}
fecharConexao($conexao);

?>