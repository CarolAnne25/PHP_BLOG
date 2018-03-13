<?php
// Affiche la liste de tous les billets du blog
require_once 'Modele/modele.php';
function accueil() {
	$b = new Modele();
	$billets = $b->getBillets();
	require 'Vue/vueAccueil.php';
}
?>