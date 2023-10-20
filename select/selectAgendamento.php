<?php
use app\libraries\Agendamento;
    require '../conexao.php';
    $conexao = conectar();
    require '../class/Agendamento.php';

    $sql = "SELECT * FROM tbl_agendamento";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaAgendamento = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $numeroAgendamento = $registro['numeroAgendamento'];
        $dataAgendamento = $registro['dataAgendamento'];
        $horaAgendamento = $registro['horaAgendamento'];
        $queixa = $registro['queixa'];
        $gravidade = $registro['gravidade'];

        $a = new Agendamento($numeroAgendamento,$dataAgendamento,$horaAgendamento,$queixa,$gravidade);

        array_push($listaAgendamento, $a);
    }
    


    $lista_json = json_encode($listaAgendamento);
 

    fecharConexao($conexao);
    
    echo $lista_json;
?>