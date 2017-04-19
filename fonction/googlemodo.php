<center>
	<h3>Le Google du modos !</h3>
		<form id="search" method="GET" action="#">
			<input type="text" name="pseudo" placeholder="Pseudo...." >
			<input type="submit" value="rechercher">
		</form>
</center>
<br />
<?
if (isset($_GET['pseudo']))
{
  require 'sql.php';
  $requete = $bdd->prepare("SELECT * FROM infos WHERE pseudo= ? ORDER BY id DESC");
  $requete->execute(array($_GET['pseudo']));
  while ($donnees = $requete->fetch())
{
    echo '<center><b>pseudo: <td></b>' . htmlspecialchars($donnees['pseudo']) .' </b></td><td><b> Motif: </b>' . htmlspecialchars($donnees['motif']) . '</td></center>';
}
}

?>
<br />
