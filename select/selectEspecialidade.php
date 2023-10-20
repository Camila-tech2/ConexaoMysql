<?php
use app\libraries\Especialidade;
    require '../conexao.php';
    $conexao = conectar();
    require '../class/Especialidade.php';
    
    $sql = "SELECT * FROM tbl_especialidade";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaEspecialidade = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $nomeEspecialidade = $registro['nomeEspecialidade'];
        $numeroRegistro = $registro['numeroRegistro'];
        $publicoAlvo = $registro['publicoAlvo'];

        $e = new Especialidade($nomeEspecialidade, $numeroRegistro, $publicoAlvo);

        array_push($listaEspecialidade, $e);
    }
    
    $lista_json = json_encode($listaEspecialidade);
 

    fecharConexao($conexao);
    
    echo $lista_json;
?>