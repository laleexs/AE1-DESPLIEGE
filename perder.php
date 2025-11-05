<?php
session_start();

echo "Lo siento, has perdido :( La palabra era: " . $_SESSION['palabra'] . "<br>";
session_destroy();
echo '<a href="index.php">Jugar de nuevo</a>';