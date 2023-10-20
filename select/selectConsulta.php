<?php
use app\libraries\Consulta;
    require '../conexao.php';
    $conexao = conectar();
    require '../class/Consulta.php';

    $sql = "SELECT * FROM tbl_consulta";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaConsulta = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $numeroConsulta = $registro['numeroConsulta'];
        $dataConsulta = $registro['dataConsulta'];
        $horaConsulta = $registro['horaConsulta'];
        $medicoConsulta = $registro['medicoConsulta'];
        $pacienteConsulta = $registro['pacienteConsulta'];
        $agendamentoConsulta = $registro['agendamentoConsulta'];

        $c = new Consulta($numeroConsulta,$dataConsulta,$horaConsulta,$medicoConsulta,$pacienteConsulta,$agendamentoConsulta);

        array_push($listaConsulta, $c);
    }
    
    $lista_json = json_encode($listaConsulta);
 

    fecharConexao($conexao);
    
    echo $lista_json;
?>