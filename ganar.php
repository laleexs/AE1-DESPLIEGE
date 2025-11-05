<?php
session_start();

echo "¡Enhorabuena! Has ganado :) La palabra era: " . $_SESSION['palabra'] . "<br>";
session_destroy();
echo '<a href="index.php">Jugar de nuevo</a>';