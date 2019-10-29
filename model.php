<html lang= 'fr'>


<head>
	<meta charset="UTF-8">
	<title> Essai </title>
	
</head>

<body>


<?php

function openBdd() 
{
	
	$server = "localhost";
	$user = "root";
	$password ="";
	$dbname ="exploitation";
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=exploitation;charset=utf8', 'root', '');
				echo 'Base correctement ouverte !';
			echo'</br>';
				return $bdd;
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
			
}


function getSportsByTypes()
{
	$reponse = openBdd()->query('SELECT * FROM typesport t inner join sport s on s.id = t.id ');

	return $reponse;
}	

function getSports()
{
	$sport = openBdd()->query('SELECT Nom FROM sport');
	return $sport;
}	

function getFirstSport($id)
{
	$q=openBdd()->prepare('SELECT Nom FROM sport WHERE idType = :id');
	$q->bindParam(":id",$id);
	$q->execute();
	
	return $q;
}	
?>
</html>