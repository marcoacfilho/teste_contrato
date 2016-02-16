				<?php
						
			 			$sql =  mysql_query("SELECT $res_codigo, $res_nome as titulo FROM $tabela order by $res_nome");
			 			while ($result = mysql_fetch_array($sql) )
			 			{
       					if($res_nome == 'CODCLIENTE'){
								$codigo_cliente  = $result['titulo'];
								$clientes = mysql_query("SELECT * FROM clientes WHERE CODIGO = $codigo_cliente");
								$result1 = mysql_fetch_array($clientes);
								echo "<a id='editar' class='nao_imprimir' href=\"frmedicao.php?cod=".$result[$res_codigo]."&tab=".$tabela."&tabcod=".$res_codigo."&nome=".$res_nome." \">Ver</a>";
								echo "<a id='deletar' class='nao_imprimir' href=\"deleta.php?cod=".$result[$res_codigo]."&tab=".$tabela."&tabcod=".$res_codigo."&nome=".$res_nome." \">Deletar </a>";
								echo "<p class='td'>Contrato número: ".$result[$res_codigo]." | Cliente: ".$result1['NOME']."</p>";
							}
							else{
								echo "<a id='editar' class='nao_imprimir' href=\"frmedicao.php?cod=".$result[$res_codigo]."&tab=".$tabela."&tabcod=".$res_codigo."&nome=".$res_nome." \">Ver / Editar </a>";
								echo "<a id='deletar' class='nao_imprimir' href=\"deleta.php?cod=".$result[$res_codigo]."&tab=".$tabela."&tabcod=".$res_codigo."&nome=".$res_nome." \">Deletar </a>";
								echo "<p class='td'>".$result['titulo']."</p>";
							}
			 			}
			 	?>
			 	<a href="#topo">Voltar ao topo</a>
