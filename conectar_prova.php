<?php 
 		$servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'pizzaria';

 $conexao = @mysqli_connect ($servidor, $usuario, $senha,
 $banco)

or die ( "Problemas com a conexão banco de dados");
 ?>