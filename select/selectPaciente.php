<?php
use app\libraries\Paciente;
    require '../conexao.php';
    $conexao = conectar();
    require '../class/Paciente.php';
    
    $sql = "SELECT * FROM tbl_paciente";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaPaciente = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $numeroBeneficiario = $registro['numeroBeneficiario'];
        $nomePaciente = $registro['nomePaciente'];
        $enderecoPaciente = $registro['enderecoPaciente'];
        $telefonePaciente = $registro['telefonePaciente'];
        $doencasPrevias = $registro['doencasPrevias'];
        $medioDeUsoContinuo = $registro['remedioDeUsoContinuo'];

        $p = new Paciente($numeroBeneficiario,$nomePaciente,$enderecoPaciente,$telefonePaciente,$doencasPrevias,$medioDeUsoContinuo);

        array_push($listaPaciente, $p);
    }
    
    $lista_json = json_encode($listaPaciente);

    fecharConexao($conexao);

    echo $lista_json;
?>