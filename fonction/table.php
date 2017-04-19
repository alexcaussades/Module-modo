<!-- Formation du tableau en refresher auto "1s" -->
<div id="table">
  <center>
  <table class="table table-bordered" style="width:90%">
    <tr>
      <th><center>id</center></th>
      <th><center>Pseudo</center></th>
      <th><center>Type</center></th>
      <th><center>Motif</center></th>
  	<th><center>Modérateur</center></th>
    <th><center>stream</center></th>
    </tr>
<!-- connection a la base de donné plus while sur le tableau -->
<?php
require_once 'sql.php';
$requete = $bdd->prepare("SELECT * From infos ORDER by id DESC");
$requete->execute();
while ($donnees = $requete ->fetch())

{
  echo '<tr>';
  echo '<td>';
    echo $donnees["id"];
  echo '</td>';
  echo '<td>';
    echo $donnees["pseudo"];
  echo '</td>';
  echo '<td>';
    echo $donnees["type"];
  echo '</td>';
  echo '<td>';
    echo $donnees["motif"];
  echo '</td>';
  echo '<td>';
    echo $donnees["modo"];
  echo '</td>';
  echo '</td>';
  echo '<td>';
    echo $donnees["stream"];
  echo '</td>';
  echo "</tr>";
}
?>
</table>
</center>
</div>
