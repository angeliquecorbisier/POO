<?php

session_start();

include_once("classdatabase.php");

echo "Welcome " . $_SESSION['username'];
 
echo "<a href='logout.php'>Se déconnecter</a>";

echo "<a href='update.php'>Mettre à jour</a>";

echo "<a href='delete.php'>Supprimer profil</a>";


?>