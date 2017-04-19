<head>
<meta charset="utf8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Formation du tableau en refresher auto "1s" -->
<div id="table">
  <center>
  <table class="table table-bordered" style="width:90%">
    <tr>
      <th><center>Numéros</center></th>
      <th><center>Dépositaire</center></th>
      <th><center>Note</center></th>
      </tr>
<!-- connection a la base de donné plus while sur le tableau -->
<?php
require_once 'sql.php';
$requete = $bdd->prepare("SELECT * From notemodo ORDER by id DESC");
$requete->execute();
while ($donnees = $requete ->fetch())

{
        echo '<tr>';
        echo '<td>';
          echo $donnees["id"];
        echo '</td>';
        echo '<td>';
          echo $donnees["modo"];
        echo '</td>';
        echo '<td>';
          echo $donnees["note"];
        echo '</td>';
        echo "</tr>";
  }

?>
</table>
</center>
