
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		$titulo = "Controle &raquo; Cadastrar Clientes";
		require_once ("includes/header.php"); 
	?>

</head>
<body>
			<?php 
				include('includes/topoemenu.php');
				require_once('includes/db.php');
				if ($_POST)
				{
					$nome = $_POST['nome'];
					$cpf = $_POST['cpf'];
					$cidade = $_POST['cidade'];
					$estado = $_POST['estado'];
					$fone = $_POST['fone'];
					$nascimento = $_POST['nascimento'];
					
					
					if ($nome == '' || $fone == '' || $cpf == '' || $cidade == '' || $estado == '' || $nascimento == '')
					{
						echo "<script>alert('Preencha todos os campos')</script>";	
						$cad = 0;				
					}
					else
						$cad = mysql_query ("INSERT INTO clientes(CODIGO,NOME,FONE,CPF,CIDADE,ESTADO,NASCIMENTO) 
						values(NULL,'$nome','$fone','$cpf','$cidade','$estado','$nascimento') ") 
						or die (mysql_error());
						if ($cad != 0)
							echo "<script>alert('Cadastro foi efetuado com sucesso');</script>";

				}
			 ?>
			 	
			<div id="principal">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<fieldset>
						<legend class="titulo">Cadastro de Clientes &darr; </legend>
						<div class="col-md-12">
							<label>Nome</label>
							<input type="text" name="nome" maxlength="45"  /><br />
						</div>
						<div class="col-md-12">	
							<label>CPF</label>
							<input type="text" name="cpf"  /> <br />
						</div>	
						<div class="col-md-12">	
							<label>Cidade</label>
							<input type="text" name="cidade"  /> <br />
						</div>	
						<div class="col-md-12">	
							<label>Estado</label>
							<input type="text" name="estado"  /> <br />
						</div>	
						<div class="col-md-12">	
							<label>Telefone</label>
							<input type="text" name="fone" maxlength="11" /> <br />
						</div>	
						<div class="col-md-12">	
							<label>Data Nascimento</label>
							<input type="date" name="nascimento"  />  <br />
						</div>
							<input class="botao" type="submit" name="enviar" value="Cadastrar" /> 
					</fieldset>				
				</form>
			</div> <!-- Fim da div#principal -->
			<?php include('includes/fimerodape.php'); ?>
</body>
</html>