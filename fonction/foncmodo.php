<?php

	require_once 'sql.php';

	if((!empty(htmlentities(addslashes(htmlspecialchars($_POST['modo'])))))){$modo=$_POST['modo'];}else{echo '<font color="red">Pas de pseudo entré</font>';}
	if((!empty(htmlspecialchars($_POST['note'])))){
		$note=$_POST['note'];
		if(strpos($note,"'")){
			$search = array("'");
			$replace = array("\'");
			$subject = $note;
			$note = str_replace($search, $replace, $subject);
		}
	}
	else{
				echo '<font color="red">Pas de note entré</font>';
}

	if(empty($modo) AND empty($note))
	{
		echo 'Infos vides.';
	}
	else
	{
		try
		{
			$sql = "INSERT INTO notemodo(id, modo, note) VALUES('','$modo','$note')";
			$bdd->exec($sql);
			//$bdd->closeCursor();
			echo 'Vos infos on été ajoutées.';
		}
		catch (Exception $e)
		{
			die("Erreur requête sql Recherger la page");
		}
	}
header('Location: ../template/pages/note.php');
?>
