<!DOCTYPE html>
<html lang="fr">
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
require('connect.php');
	error_reporting(E_ALL);
  $query = "SELECT * From notemodo ORDER by id DESC";
  if ($result = $mysqli->query($query)) {

      while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>';
          echo $row["id"];
        echo '</td>';
        echo '<td>';
          echo $row["modo"];
        echo '</td>';
        echo '<td>';
          echo $row["note"];
        echo '</td>';
        echo "</tr>";
        //$row["pseudo"]." : ".$row["type"]." : ".$row["motif"].'<br />';
      }
      // Libération des résultats /
      $result->free();
  } else {
    die('error');
  }
  // Fermeture de la connexion */
  $mysqli->close();
?>
</table>
</center>
