<?php 
function connexion()
{
	try
	{
	   $bdd = new PDO('mysql:host=localhost;dbname=PFA_BD;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}
return $bdd;
}
?>