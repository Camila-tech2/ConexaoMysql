<?php
    // parâmetros
    
    conectar();
    function conectar(){
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $bd = 'db_exemplo';

        // realizar a conexão 
        $conection = mysqli_connect($host, $usuario, $senha, $bd);
        return $conection;
    }
 
    function fecharConexao($conexao){
        mysqli_close($conexao);
    }
  
    

?>