<?php

	require_once 'connexion.php';

	$queryGame = $connexion->prepare('SELECT * FROM game');

	$queryGame->execute();

	$game = $queryGame->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>'; print_r($game); echo '</pre>';
