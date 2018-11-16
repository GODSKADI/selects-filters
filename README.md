

1. Descargar la base de datos del "World". 
     http://downloads.mysql.com/docs/world.sql.zip

2. Descomprimimos el archivo "world.sql.zip" quedara algo como esto:
     world.sql

3. Ir al terminal acceder al mysql con nuestro usuario 
     $ mysql -u "nombre" -p 
     Enter password: "contraseña"

4. Creamos una base de datos con el nombre "world".  
     mysql> CREATE  database world

5. Importamos el archivo world.sql
     $ sudo mysql -u "nombre" -p world < world.sql
     Enter password: "contraseña"
 
6. Remplazar la linea $conn = mysqli_connect('localhost','skadi','P@ssw0rd'); de los archivos select.php, country.php y city.php por:
      $conn = mysqli_connect('localhost','(tu nombre de mysql)','(tu contraseña)');
