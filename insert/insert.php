<?php
    require '../conexao.php';
    $conexao = conectar();
    $nomePaciente = $_POST['nomePaciente'];
    $senhaPaciente = $_POST['senhaPaciente'];
    $enderecoPaciente = $_POST['enderecoPaciente'];
    $telefonePaciente = $_POST['telefonePaciente'];
    $numeroBeneficiario = $_POST['numeroBeneficiario'];
    $doencasPrevias = $_POST['doencasPrevias'];
    $remedioDeUsoContinuo = $_POST['remedioDeUsoContinuo'];

    $query = "INSERT INTO tbl_paciente VALUES ($nomePaciente, $senhaPaciente, $enderecoPaciente, $telefonePaciente, $numeroBeneficiario, $doencasPrevias, $remedioDeUsoContinuo)";
    $inseriu = mysqli_query($conexao, $query) or die("Não inserido");
    
    if($inseriu == 1){
        echo 'Registro inserido com sucesso <BR>';
        echo "Seu Nome = $nomePaciente e o número beneficiário = $numeroBeneficiario";
    } else {
        echo "Dados não inseridos";
    }
    fecharConexao($conexao);

?>

