<?php
//ctrl = controleur
//mth = méthode du controleur
session_start();
// Contrôleur
if (isset($_GET['ctrl'])) {
	$c_name = ucfirst(strtolower($_GET['ctrl'])).'Controller';
}
else {
	// Contrôleur par défaut
	$c_name = "AccueilController";
}

// Méthode
if (isset($_GET['mth'])) {
	$method = $_GET['mth'];
}
else {
	// Méthode par defaut
	$method = "index";
}


// Recherche si la page existe
$c_path = 'controller/'.$c_name.'.php';
if (file_exists($c_path)) {
	require_once $c_path;
	if (class_exists($c_name) && method_exists($c_name, $method)) {
		$c_object = new $c_name();
		$c_object->$method();
	} else {
		die("Erreur 404 page non trouver");
	}
} else {
	die("Erreur 404 page non trouver");
}