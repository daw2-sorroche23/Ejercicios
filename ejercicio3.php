<?php
session_start();
$_SESSION['favpoke'] = "Pheromosa";
$_SESSION['typoke'] = "Bicho/Lucha";
?>
<html>
  <head>
    <title>Cual es mi pokemon preferido</title>
  </head>
<body>
<?php
    $myres = urlencode("Si que lo es");
    echo "<a href='ejercicio1.php?res=$myres'>";
    echo "Este es mi Pokemon preferido de 7 generacion"; 
    echo "</a>";

    echo "<br/>";
    date_default_timezone_set('America/New_York');
    $month = date('n');
    if ($month ==  1) { echo '31'; }
    if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
    if ($month ==  3) { echo '31'; }
    if ($month ==  4) { echo '30'; }
    if ($month ==  5) { echo '31'; }
    if ($month ==  6) { echo '30'; }
    if ($month ==  7) { echo '31'; }
    if ($month ==  8) { echo '31'; }
    if ($month ==  9) { echo '30'; }
    if ($month == 10) { echo '31'; }
    if ($month == 11) { echo '30'; }
    if ($month == 12) { echo '31'; }

?>
</body>
</html>