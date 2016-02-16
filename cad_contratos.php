
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		$titulo = "Controle &raquo; Cadastrar Produto";
		require_once ("includes/header.php"); 
	?>

</head>
<body>
			<?php 
				include('includes/topoemenu.php');
				require_once('includes/db.php');
				if ($_POST)
				{
				
					$cliente = $_POST['cliente'];
					$valor = $_POST['valor'];
					$data = $_POST['data'];
					
					if ($valor == '' || $cliente == '' || $data == ''){
						$cad = 0;
						echo "<script>alert('Preencha todos os campos');</script>";
					}
					else					
						$cad = mysql_query ("INSERT INTO contratos(CODCONTRATO,CODCLIENTE,VALORCONTRATO,DATACONTRATO) values(NULL,'$cliente','$valor','$data') ") or die ("ERRO");	
					if ($cad != 0)
						echo "<script>alert('Cadastro foi efetuado com sucesso');</script>";			
				}
				$recupera2 = mysql_query("SELECT * FROM clientes") or die (mysql_error());

			 ?>


				
			
			<div id="principal">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<fieldset>
						<legend class="titulo">Entrada de Contratos &darr; </legend>
						<div class="col-md-12">
							<label>Cliente</label>
							<select name ='cliente'>
							  <?php 
								while($sqlClienteResultFim= mysql_fetch_assoc($recupera2))
								{
								?>
								<option value="<?=$sqlClienteResultFim["CODIGO"]?>"> 
								<?=$sqlClienteResultFim["NOME"]?> 
								</option>
								<?php
								}
							?>
							</select><br />
						</div>
						<div class="col-md-12">
							<label>Valor</label>
							<input type="number" name="valor" maxlength="45"  /><br />
						</div>
						<div class="col-md-12">
							<label>Data de Cadastro</label>
							<input type="text" name="data" value = "<?php echo(date('Y - m - d')); ?>" readonly/><br />
						</div>
						
						<input class="botao" type="submit" name="enviar" value="Cadastrar" />
					</fieldset>				
				</form>
			</div> <!-- Fim da div#principal -->
			
			<?php include('includes/fimerodape.php'); ?>
			
</body>
</html>