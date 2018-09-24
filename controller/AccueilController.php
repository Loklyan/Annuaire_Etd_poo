<?php
class AccueilController
{
	public function index()
	{
		include "templates/header.php";

		echo ("
			<h3>Bienvenue </h3>
			<a href='?ctrl=employe'> Accéder à l'annuaire des employés</a>
			<br><br>
			<a href='?ctrl=install'> Installation de la base</a>
			<br><br>			
		");

		if(isset($_SESSION['id'])){
			echo "<a href='?ctrl=employe&mth=deconnection'>Déconnection</a>";
		}else{
			echo "<a href='?ctrl=employe&mth=connection'>Connection</a>";
		}

		include "templates/footer.php"; 
	}
}


