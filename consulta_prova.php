<meta charset="utf-8">
<?php

	include_once "conectar_prova.php";

	$query = @mysqli_query($conexao, "select * from pizzas");

	if (!$query) {
		echo '<input type ="button" on click="window.location"='."
		'index.php'".';"value="voltar"><br><br>';
		die ('Falha na consulta: ' . @mysqli_error($conexao));
	}

	echo "
<!DOCTYPE html>
<meta charset= 'utf-8'>
<HTML LANG='PT-BR'> 
<html>

<head>
	       <title>Consulta de Dados</title>
         <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/solid.css' integrity='sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos' crossorigin='anonymous'>
         <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css' integrity='sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT' crossorigin='anonymous'>
</head>

<style>
	
  #navigation 
  {
    display: none;
  }

  #navigation:checked ~ .menu 
  {
    width: 700px;
    border-radius: 5px;
    background-color: transparent;
    border: 3px solid #fff952;
    height: 85px;
  }
  #navigation:checked ~ .menu > ul 
  {
    display: block;
    opacity: 1;
  }
  #navigation:checked ~ .menu > .bars 
  {
    display: none;
  }
  .menu 
  {
    display: block;
    margin: 30px auto;
    width: 100px;
    height: 100px;
    background-color: #ff1119;
    font-family: Segoe UI Semibold;
    border: 3px solid transparent;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
  }
  .menu div.bars 
  {
    width: 40px;

  }
  .menu div.bars .bar
  {
    display: block;
    width: 100%;
    height: 5px;
    margin-top: 3px;
    border-radius: 2px;
    background-color: #fff952;
  }
  .menu ul 
  {
    opacity: 0;
    display: none;
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    list-style-type: none;
    padding: 0;
    width: 700px;
    text-align: center;
    margin-bottom: 0;
  }
  .menu ul li
  {
    display: inline-block;
  }
  .menu ul li a i
  {
    text-decoration: none;
    display: inline-block;
    padding: 15px 25px;
    color: #fff952;
    font-size: 20px;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    border: 3px solid transparent;
    border-radius: 5px;
  }
  .menu ul li a i:hover 
  {
    border-color: #fff952;
  }
  .menu ul li a i:target 
  {
    border-bottom-color: #fff952;
  }

  header
  { margin: 5px 5px;
    border-radius: 5px;
    background-color:#ff1119; 
  }

table {
  width: 100%;
  table-layout: fixed;
}
.tbl-header {
  background-color: rgba(255, 255, 255, 0.3);
}
.tbl-content {
  height: 300px;
  overflow-x: auto;
  margin-top: 0px;
  border: 1px solid rgba(255, 255, 255, 0.3);
}
th {
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td {
  padding: 15px;
  text-align: left;
  vertical-align: middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255, 255, 255, 0.1);
}

body {
  background: -webkit-linear-gradient(left, #f70008, #ff444a);
  background: linear-gradient(to right, #f70008, #ff444a);
  font-family: 'Segoe UI Semibold', sans-serif;
}
section {
  margin: 50px;
}

::-webkit-scrollbar {
  width: 6px;
}
::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
::-webkit-scrollbar-thumb {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
</style>
";

echo "<header>
<center>    
<br>     
<img id='img' src='https://i.imgur.com/hgMxUuY.png' width='1200' height='200' />
<input type='checkbox' id='navigation'>
<label class='menu' for='navigation'>

<div class='bars'>
  <span class='bar'></span>
  <span class='bar'></span>
  <span class='bar'></span>
  <span class='bar'></span>
  <span class='bar'></span>
</div>
  
<ul>
  <li><a id='home' href='http://localhost/prova/frm_pizzariaHome.html' target='_blank' title='Home Pizzaria'><i class='fas fa-home'></i></a></li>
  <li><a id='incluir' href='http://localhost/prova/frm_pizzariaInclui.html' target='_blank' title='Cadastro de Pizzas'><i class='fas fa-plus'></i></a></li>
  <li><a id='alterar' href='http://localhost/prova/frm_pizzariaAltera.html' target='_blank' title='Alteração de Dados Cadastrados'><i class='fas fa-pen'></i></a></li>
  <li><a id='excluir' href='http://localhost/prova/frm_pizzariaExclui.html' target='_blank' title='Exclusão de Pizzas Cadastradas'><i class='fas fa-trash-alt'></i></a></li>
  <li><a id='consultar' href='http://localhost/prova/consulta_prova.php' target='_blank' title='Consulta de Pizzas Cadastradas'><i class='fas fa-eye'></i></a></li>
</ul>

</label>
</center>
</header>
<body>
<section>
  <div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <thead>
      <tr>
          <th>Sabor</th>
          <th>Ingredientes</th>
          <th>Massa</th>
          <th>Tamanho</th>
          <th>Calorias</th>
          <th>Alergênicos</th>
          <th>Valor</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class='tbl-content'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <tbody>";

 	while($dados = mysqli_fetch_array($query))
{

	echo "<td>" . $dados['sabor'] . "</td>";
	echo "<td>" . $dados['ingredientes'] . "</td>";
	echo "<td>" . $dados['massa'] . "</td>";
	echo "<td>" . $dados['tamanho'] . "</td>";
	echo "<td>" . $dados['calorias'] . "</td>";
	echo "<td>" . $dados['alergenicos'] . "</td>";
	echo "<td>" . $dados['valor'] . "</td>";
	echo "</tr>";

}

echo "</tbody>
    </table>
  </div>
</section>
</body>
</html>";

mysqli_close($conexao);
?>