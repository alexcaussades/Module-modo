<?
if (isset($_GET['pseudo']))
{
  require 'sql.php';
  $requete = $bdd->prepare("SELECT * FROM infos WHERE pseudo= ? ORDER BY id DESC");
  $requete->execute(array($_GET['pseudo']));
  while ($donnees = $requete->fetch())
{
    echo '<p>' . htmlspecialchars($donnees['pseudo']) .' - ' . htmlspecialchars($donnees['motif']) . '</p>';
}
}

?>
