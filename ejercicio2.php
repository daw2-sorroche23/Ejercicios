<?php
session_unset();
?>
<html>
 <head>
  <title>Please Log In</title>
 </head>
 <body>
  <form method="post" action="ejercicio4.php">
   <p>Dime el nombre de tu pokemon favorito: 
    <input type="text" name="favpoke"/>
   </p>
   <p>Dime el tipo al que pertenece el pokemon: 
    <input type="text" name="typoke"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>
<?php
echo "Ejemplo: ";
echo "<br/>";
echo $_COOKIE["pokemon"];
echo "<br/>";
echo $_COOKIE["tipo"];

?>

