<?php      
				include 'connexion.php';
					// Exécution de la requête SQL
					$query = 'SELECT * FROM valeur_champs_select WHERE id_champs = 29';
					$result = pg_query($query) or die('Échec requête : ' . pg_last_error());

					// Affichage des résultats en HTML	
					echo "<center>";
					echo "<table summary = 'tableau' border = '2' width = '1550px' height = '100px'>";
						echo "<tr>";
							echo "<thead>";
								echo "<th align = 'middle' height = '50px'> <br></br> Pillule <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> DIU <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> Injetable <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> Implant <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> Préservatif <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> Methode Naturelle <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> Spermicites <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> CN <br></br> </th>";
								echo "<th align = 'middle' height = '50px'> <br></br> Autres <br></br> </th>";
							echo "</thead>";
						echo "</tr>";
						while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
						echo "<tr>";
								echo "<td align = 'middle' width = '1000px' height = '40px'><br></br>".$line['valeur=Pilule LOF]."<br></br></td>";
								
						echo "</tr>";
						} 
					echo "</table>";
					echo "</center>";
			?>