<?php include "templates/header.php";?>
<article>
<h2>Afficher <?php echo $employe['nom']; ?></h2>
<a href="?ctrl=employe">Retour</a><br><br>
<table>
	<tbody>
		<tr>
			<td>Prénom</td>
			<td><?php echo $employe['prenom']; ?></td>
		</tr>
		<tr>
			<td>Nom</td>
			<td><?php echo $employe['nom']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><a href="mailto:<?php echo $employe['email']; ?>"><?php echo $employe['email']; ?></a></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><?php echo $employe['age']; ?></td>
		</tr>
		<tr>
			<td>Ville</td>
			<td><a href="https://www.google.com/maps?q=<?php echo $employe['ville']; ?>"><?php echo $employe['ville']; ?></a></td>
		</tr>
		<tr>
			<td>Grade</td>
			<td><?php switch ($employe['grade']) {
				case '0':
					echo "Utilisateur";
					break;

				case '1':
					echo "Administrateur";
					break;

				case '2':
					echo "Super Administrateur";
					break;
				
				default:
					echo "Erreur!";
					break;
			} ?></td>
		</tr>
	</tbody>
</table>
</article>
<?php include "templates/footer.php";?>