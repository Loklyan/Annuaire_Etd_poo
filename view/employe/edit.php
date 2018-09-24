<?php include "templates/header.php";?>
<article>
<h2>Modifier un employé</h2>
<a href="?ctrl=employe">Retour</a><br><br>
<form action="?ctrl=employe&mth=edit&id=<?= $_GET['id'] ?>" method="post">
    <label for="prenom">Prénom</label><br>
    <input type="text" name="prenom" id="prenom" value="<?= $employe['prenom'] ?>"><br>
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" value="<?= $employe['nom'] ?>"><br>
    <label for="email">Adresse mail</label><br>
    <input type="text" name="email" id="email" value="<?= $employe['email'] ?>"><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" id="age" value="<?= $employe['age'] ?>"><br>
    <label for="ville">ville de résidence</label><br>
    <input type="text" name="ville" id="ville" value="<?= $employe['ville'] ?>">
    <br><br>
    <input type="submit" name="submit" value="Modifier">
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