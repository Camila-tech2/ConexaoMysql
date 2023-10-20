<?php
use app\libraries\Medico;
    require '../conexao.php';
    $conexao = conectar();
    require '../class/Medico.php';
    
    $sql = "SELECT * FROM tbl_medico";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";


    $listaMedico = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $nomeMedico = $registro['nomeMedico'];
        $telefoneMedico = $registro['telefoneMedico'];
        $enderecoMedico = $registro['enderecoMedico'];
        $crm = $registro['crm'];
        $especialidadesMedico = $registro['especialidadesMedico'];
       
        $m = new Medico($nomeMedico,$telefoneMedico,$enderecoMedico,$crm,$especialidadesMedico);

        array_push($listaMedico, $m);
    }
    
    $lista_json = json_encode($listaMedico);

    fecharConexao($conexao);

    echo $lista_json;
?>