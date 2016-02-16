			<div id="search"><!-- Campo de pesquisa -->

					<form action="#" method="post">
						<fieldset>
							<input type="text" class="input" name="pesquisa" value="Procurar..." onfocus="this.value='';"/>
							<input type="submit" name="search" id="search" class="submit" value="  "/>
						</fieldset>					
					</form>
				</div>
				
				<?php
					if (isset($_POST['pesquisa'])) //recupera a pesquisa digitada
					{
						$pesquisa = $_POST['pesquisa'];
						//mostrar resultados
						echo "Consulta por <b><i>".$pesquisa."</b></i>";
											
						$consulta = mysql_query ("SELECT $res_nome, $res_codigo FROM $tabela WHERE $res_nome LIKE '%$pesquisa%' ");
						$rows = mysql_num_rows($consulta);
						if ($rows == 0)
							echo " N&atilde;o obteve nenhum resultado.";
						if($rows == 1) 
								echo " resultou em ".$rows." registro<br /><br />";						
						if($rows > 1)
								echo " encontrou ".$rows." registros<br /><br /> ";
												
						while ($result = mysql_fetch_array($consulta)) //imprime os resultados e o botao editar
						{ 								
								
								echo "<a id='editar' class='nao_imprimir' href=\"frmedicao.php?cod=".$result[$res_codigo]."&tab=".$tabela."&tabcod=".$res_codigo."&nome=".$res_nome." \"> Editar </a>";
								echo "<a id='deletar' class='nao_imprimir' href=\"deleta.php?cod=".$result[$res_codigo]."&tab=".$tabela."&tabcod=".$res_codigo."&nome=".$res_nome." \">Deletar </a>";
								echo "<p class='td'>".$result[$res_nome]."</p>";	
								//echo "<hr />"; //traça uma linha horiz. pra melhor visualizaçao.
						}
						
					} // fim do if da pesquisa digitada
					
					else					
					
							include ('includes/resultados.php'); // mostra todos os dados 
					
				?>
