<?php
session_start();
$_SESSION['favpoke'] = $_POST['favpoke'];
$_SESSION['typoke'] = $_POST['typoke'];

if (($_SESSION['typoke'] == 'Bicho')){
    echo "Parece que tenemos el mismo tipo de Pokemon favorito me agradas";
} else {
    echo 'Bueno tambien es un buen tipo';  
}
?>
<html>
 <head>
  <title>Find my Favorite Movie!</title>
 </head>
 <body>
 <?php
    echo "<br/>";
    $myres = urlencode("Si que lo es");
    echo "<a href='ejercicio1.php?res=$myres'>";
    echo "Volver a empezar"; 
    echo "</a>";
?>
 </body>
</html>
