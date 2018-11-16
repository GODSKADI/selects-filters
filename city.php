<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
 	  <title>Exemple de lectura de dades a MySQL</title>
   	<style>
   		body{
   		}
   		table,td {
   			border: 1px solid black;
   			border-spacing: 0px;
   		}
   	</style>
 </head>
 <body>
 	<h1>Exemple de lectura de dades a MySQL</h1>

 	<?php
 		$conn = mysqli_connect('localhost','skadi','P@ssw0rd');

 		mysqli_select_db($conn, 'world');

    $code = $_POST['codigo'];

 		$consulta = "SELECT ci.Name City, co.Name Country FROM city ci, country co WHERE ci.CountryCode = co.Code AND ci.CountryCode = '$code';";

 		$resultat = mysqli_query($conn, $consulta);


 		if (!$resultat) {
     			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
     			$message .= 'Consulta realitzada: ' . $consulta;
     			die($message);
 		}
 	?>

 	<table>
 	<thead><td colspan="4" align="center" bgcolor="cyan">Llistat de ciutats</td></thead>
 	<?php

 		while( $registre = mysqli_fetch_assoc($resultat) )
 		{

 			echo "\t<tr>\n";

      echo "\t\t<td>".$registre["Country"]."</td>\n";
 			echo "\t\t<td>".$registre["City"]."</td>\n";

 			echo "\t</tr>\n";
 		}
 	?>
 	</table>
 </body>
</html>
