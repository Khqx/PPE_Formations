<?php
include 'lib/connexion.php';
include 'lib/date.php';
EstConnecte();

include 'include/headerComplet.php';
$listeEmploye = RechercheMembreEquipe(ObtenirIdEnCours());
?>
<div id=principal>
	<h2>Votre équipe</h2>
	<table>
		<thead><tr><td>Id</td><td>Nom</td></tr></thead>
		<?php
			foreach($listeEmploye as $unEmploye)
			{

				echo "<tr>";
				echo "<td>$unEmploye->idEmploye</td>";
				echo "<td>$unEmploye->nom</td>";
				echo "</tr>"; 
			}
		?>
	</table>
</div>

<?php 
include 'include/sideBar.php';
include 'include/footer.php';