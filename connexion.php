<?php
$dbconn = pg_connect("host=localhost port=5433 dbname=dbRapport user=postgres password=passer")
	or die('Connexion impossible : ' . pg_last_error());
// connexion � une base de donn�es nomm�e "dbRapport" sur l'h�te "localhost" avec un nom d'utilisateur et un mot de passe

// Lib�re le resultset
//pg_free_result($result);

// Ferme la connexion
//pg_close($dbconn);
?>
