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
    </tr>
<!-- connection a la base de donné plus while sur le tableau -->
<?php
require('fonction/connect.php');
	error_reporting(E_ALL);
  $query = "SELECT * From infos ORDER by id DESC";
  if ($result = $mysqli->query($query)) {

      while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>';
          echo $row["id"];
        echo '</td>';
        echo '<td>';
          echo $row["pseudo"];
        echo '</td>';
        echo '<td>';
          echo $row["type"];
        echo '</td>';
        echo '<td>';
          echo $row["motif"];
        echo '</td>';
				echo '<td>';
					echo $row["modo"];
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
</div>
