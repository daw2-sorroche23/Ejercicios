<?php
    session_start();
    setcookie("pokemon","Pikachu",time()+60);
    setcookie("tipo","Electrico",time()+60);
?>
<html>
  <head>
    <title>Mi Pokemon preferido <?php echo $_GET['res'];?></title>
  </head>
<body>
<?php
    echo "Mi Pokemon preferido es: ";
    echo $_SESSION['favpoke'];
    echo "<br/>";

    echo "Es de tipo: ";
    echo $_SESSION["typoke"];
    echo "<br/>";

    echo "<br/>";
    echo "Tambien es el tuyo";
    echo "<br/>";
    echo $_GET['res'];
    echo "<br/>";

    $opinion = $_GET['opinion'] ?? 'Te ha gustado?';
    echo $opinion;
    echo "<br/>";

    echo "<br/>";
    echo "<a href='ejercicio2.php'>";
    echo "Utiliza este link para hacer una encuesta sobre tu Pokemon preferido"; 
    echo "</a>";
?>
</body>
</html>