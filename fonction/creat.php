<?php

require_once 'sql.php';
	if((!empty(htmlspecialchars($_POST['pseudo'])))){
		$pseudo=$_POST['pseudo'];
		if(strpos($pseudo,"'")){
			$search = array("'");
			$replace = array("\'");
			$subject = $pseudo;
			$pseudo = str_replace($search, $replace, $subject);
		}
	}
	else{
				echo '<font color="red">Pas de pseudo entré</font>';
	}

		if((!empty(htmlspecialchars($_POST['motif'])))){
			$motif=$_POST['motif'];
			if(strpos($motif,"'")){
				$search = array("'");
				$replace = array("\'");
				$subject = $motif;
				$motif = str_replace($search, $replace, $subject);
			}
		}
		else{
					echo '<font color="red">Pas de motif entré</font>';
		}
	if((!empty(htmlspecialchars($_POST['type'])))){$type=$_POST['type'];}else{echo '<font color="red">Pas de type entré</font>';}
	if((!empty(htmlspecialchars($_POST['modo'])))){$modo=$_POST['modo'];}else{echo '<font color="red">Pas de modo entré</font>';}

	if(empty(htmlspecialchars($pseudo)) AND empty(htmlspecialchars($type)) AND empty(htmlspecialchars($motif)) AND empty(htmlspecialchars($modo)))
	{
		echo 'Infos vides.';
	}
	else
	{
		try
		{
			$sql = "INSERT INTO infos(id, pseudo, type, motif, modo, date_ajout) VALUES('','$pseudo','$type','$motif','$modo',NOW())";
			$bdd->exec($sql);
			//$bdd->closeCursor();
			echo 'Vos infos on été ajoutées.';
		}
		catch (Exception $e)
		{
			die("Erreur requête sql Recherger la page");
		}
	}
	header('Location: ../index.php');
?>
