<meta charset="utf-8">
<?php

	include_once "conectar_prova.php";
	    $sabor = $_POST['sabor'];
		$ingredientes = $_POST['ingredientes'];
		$massa = $_POST['massa'];
		$tamanho = $_POST['tamanho'];
		$calorias = $_POST['calorias'];
		$alergenicos = $_POST['alergenicos'];
		$valor = $_POST['valor'];
    $query = "UPDATE pizzas set valor = '$valor', alergenicos = '$alergenicos' , calorias = '$calorias' , 
     tamanho = '$tamanho' , massa = '$massa' , ingredientes = '$ingredientes' 
    WHERE sabor ='$sabor'";

	$resultado = @mysqli_query($conexao, $query);

	if ($resultado)
	{
		echo "<style>   
		body {
		background-color: #ff1119;
        margin: 0px;
        font-family: 'Segoe UI Semibold';
        font-size: 27px;
    	}
		.container {
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    	}
        fieldset {
        	width: 50%;
        	border: 1px solid #fff952;
       		border-radius: 4px; padding-bottom: 10px;
       		background-color: #fff952;
       		box-shadow: 5px 5px 20px rgba(71, 71, 71, 8);
        }

        a 
   		{
   			 font-family: 'Segoe UI Semibold';
   			 color: #ff1119;
   			 font-size: 17px;
        	
   		}

   

		</style>
		<body>
		 <div class = 'container'>
      
      	<fieldset>";
			echo "<font color= #ff1119>&nbsp &#x1f355 DADOS ALTERADOS NO BANCO COM SUCESSO! &#x1f355</font>

			</fieldset>
			</body>
			";

			echo '<a  href="javascript:window.history.go(-1)">Voltar</a>
			</fieldset>
			</body>
			';
	}
	else
	{
		die ('Falha na Alteração ' . @mysqli_error($conexao));
	}
	@mysqli_close($conexao);
	?>