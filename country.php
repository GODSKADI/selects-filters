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

 		$consulta = "SELECT Name, Code FROM country ORDER BY Name;";

 		$resultat = mysqli_query($conn, $consulta);

 		if (!$resultat) {
     			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
     			$message .= 'Consulta realitzada: ' . $consulta;
     			die($message);
 		}
    echo "<form action='city.php' method='post'>
    <button type='submit'  >Aceptar</button><br>";

 		while( $registre = mysqli_fetch_assoc($resultat) )
 		{
      echo "<label>
      <input type='radio' name='codigo' value='".$registre["Code"]."'>
      <img src='banderas/".$registre["Name"].".png'>
      ".$registre["Name"]."
      </input><br></label>";

 		}
    echo "</select>
    <form>";
 	?>
 	</table>
 </body>
</html>
