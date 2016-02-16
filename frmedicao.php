
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		$tabela = $_GET['tab'];
		$titulo = "Controle &raquo; Editar $tabela";
		require_once ("includes/header.php"); 
	?>
</head>
<body>
			<?php 
				include('includes/topoemenu.php');
				require_once('includes/db.php');
			 ?>
			<div id="principal">
						
				<?php
					$edita = $_GET['cod'];
					
						if ($tabela == 'clientes') //aqui a ediçao de clientes
						{
							if($_POST)
							{
								$nome = $_POST['nome'];
								$cpf = $_POST['cpf'];
								$cidade = $_POST['cidade'];
								$estado = $_POST['estado'];
								$fone = $_POST['fone'];
								$nascimento = $_POST['nascimento'];
								
								$altera = mysql_query("UPDATE clientes SET NOME = '$nome', FONE = '$fone', CPF = '$cpf',CIDADE = '$cidade',ESTADO = '$estado',NASCIMENTO = '$nascimento' WHERE CODIGO = $edita")
								or die("ERRO");
								echo "Alterado com sucesso.";
							}
							$clientes = mysql_query("SELECT * FROM clientes WHERE CODIGO = $edita");
							$result = mysql_fetch_array($clientes);
				?>
							<form action="#" method="post">
								<fieldset>
									<legend class="titulo">Editar Clientes </legend>
									<div class="col-md-12">
										<label>Nome</label>
										<input type="text" name="nome" value="<?php echo $result['NOME']; ?>" maxlength="45"  /><br />
									</div>
									<div class="col-md-12">	
										<label>CPF</label>
										<input type="text" name="cpf" value="<?php echo $result['CPF']; ?>" /> <br />
									</div>	
									<div class="col-md-12">	
										<label>Cidade</label>
										<input type="text" name="cidade"  value="<?php echo $result['CIDADE']; ?>"/> <br />
									</div>	
									<div class="col-md-12">	
										<label>Estado</label>
										<input type="text" name="estado"  value="<?php echo $result['ESTADO']; ?>"/> <br />
									</div>	
									<div class="col-md-12">	
										<label>Telefone</label>
										<input type="text" name="fone" maxlength="11" value="<?php echo $result['FONE']; ?>"/> <br />
									</div>	
									<div class="col-md-12">	
										<label>Data Nascimento</label>
										<input type="date" name="nascimento"  value="<?php echo $result['NASCIMENTO']; ?>"/>  <br />
									</div>
									
									
									<input class="botao" type="submit" name="alterar" value="Editar"/>
									<a class="botao" href="clientes.php">Voltar</a>	
							
				
							
				<?php 
						}//fim da ediçao de clientes
						
				else 
						if ($tabela == 'contratos') //aqui a ediçao de pedidos
						{
							
							$contratos = mysql_query("SELECT * FROM contratos WHERE CODCONTRATO = $edita");
							$result = mysql_fetch_array($contratos);
							$cod_cliente = $result['CODCLIENTE'];
							$recupera = mysql_query("SELECT * FROM clientes WHERE CODIGO = $cod_cliente") or die (mysql_error());
				?>
							<form action="#" method="post">
								<fieldset>
									<legend class="titulo">Editar Pedidos </legend>
									<div class="col-md-12">
									<label>Cliente</label>
									
									<?php 
										while($sqlProdutoResultFim= mysql_fetch_assoc($recupera))
										{
										?>
										<input type="text" value="<?=$sqlProdutoResultFim["NOME"]?> " readonly /> 
										
										<?php
										}
									?>
									<br />
								</div>
								<div class="col-md-12">
							<label>Valor</label>
							<input type="number" name="valor" maxlength="45"  value="<?php echo $result['VALORCONTRATO']; ?>" readonly/><br />
							</div>
							<div class="col-md-12">
								<label>Data de Cadastro</label>
								<input type="text" name="data" value="<?php echo $result['DATACONTRATO']; ?>" readonly/><br />
							</div>
									
									<a class="botao" href="contratos.php">Voltar</a>	
							
				
							
				<?php 
						}//fim da ediçao de pedidos
						
				?>
				
			</div> 
			<?php include('includes/fimerodape.php'); ?>
</body>
</html>