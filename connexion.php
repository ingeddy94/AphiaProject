<?php
$dbconn = pg_connect("host=localhost port=5433 dbname=dbRapport user=postgres password=passer")
	or die('Connexion impossible : ' . pg_last_error());
// connexion à une base de données nommée "dbRapport" sur l'hôte "localhost" avec un nom d'utilisateur et un mot de passe

// Libère le resultset
//pg_free_result($result);

// Ferme la connexion
//pg_close($dbconn);
?>
