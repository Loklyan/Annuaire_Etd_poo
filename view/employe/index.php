<?php include "templates/header.php";
if (isset($_SESSION['id']) && $_SESSION['grade'] > 0) {
?>
<p><a href="?ctrl=employe&mth=add">Ajouter un employé</a></p>
<?php
}
if (!empty($data['notification'])) {
	echo "<p>$data[notification]</p>";
}
?>
<article>
<table>
	<thead>
		<tr>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Email</th>
			<th>Age</th>
			<th>Age</th>
			<th>Ville</th>
			<?php if (isset($_SESSION['id'])) { ?>
				<th>Actions</th>
			<?php } ?>
		</tr>
	</thead>
	<tbody>
		<?php
		if ($data['employes']) {
			foreach ($data['employes'] as $k => $v) {
			?>
				<tr>
					<td><?php echo $k+1; ?></td>
					<td><a href="?ctrl=employe&mth=show&id=<?php echo $v['id']; ?>"><?php echo $v['prenom']; ?></a></td>
					<td><a href="?ctrl=employe&mth=show&id=<?php echo $v['id']; ?>"><?php echo $v['nom']; ?></a></td>
					<td><a href="mailto:<?php echo $v['email']; ?>"><?php echo $v['email']; ?></a></td>
					<td><a href="tel:<?php echo $v['age']; ?>"><?php echo $v['age']; ?></a></td>
					<td><a href="https://www.google.com/maps?q=<?php echo $v['ville']; ?>"><?php echo $v['ville']; ?></a></td>
					<?php if (isset($_SESSION['id'])) { ?>
						<td>
						<p>
							<a href="?ctrl=employe&mth=show&id=<?php echo $v['id']; ?>">Lire </a>
							<?php if ($_SESSION['grade'] > 0 || $_SESSION['id'] == $v['id']) { ?>
								|
								<a href="?ctrl=employe&mth=edit&id=<?php echo $v['id']; ?>">Modifier </a>
							<?php } ?>
							<?php if ($_SESSION['grade'] > 0) { ?>
								|
								<a href="?ctrl=employe&mth=delete&id=<?php echo $v['id']; ?>">Supprimer</a>
							<?php } ?>
						</p>
						</td>
					<?php } ?>
				</tr>
			<?php
			}
		} else { ?>
			<tr>
				<td colspan="6">Pas d'employé</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>
<br>
<a href="?ctrl=Accueil&mth=index">Retour au menu</a><br><br>
</article>
<?php include "templates/footer.php";?>