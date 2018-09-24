<?php include "templates/header.php";?>
<article>
<h2>Ajouter un employé</h2>
<a href="?ctrl=employe">Retour</a><br><br>
<form action="?ctrl=employe&mth=add" method="post">
    <label for="prenom">Prénom</label><br>
    <input type="text" name="prenom" id="prenom"><br>
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom"><br>
    <label for="email">Adresse mail</label><br>
    <input type="text" name="email" id="email"><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" id="age"><br>
    <label for="ville">ville de résidence</label><br>
    <input type="text" name="ville" id="ville">
    <label for="pass">Mot de passe</label><br>
    <input type="text" name="pass" id="pass">
    <label for="grade">Grade</label><br>
    <select id="grade" name="grade">
        <option value="0">Utilisateur</option>
        <option value="1">Administrateur</option>
        <option value="2">Super-Administrateur</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Ajouter">
    <br><br>

	<?php if ($errors) {
			?>
			<h3>Erreur:</h3>
			<ul>
				<?php foreach ($errors as $value) { ?>
					<li><?php echo $value; ?></li>
				<?php } ?>
			</ul>
	<?php } ?>
</form>
</article>
<?php include "templates/footer.php";?>