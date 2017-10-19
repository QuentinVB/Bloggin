<?php
//model
	include("./functions/database_connexion.php");
	function getUserById($id)
	{
		$bdd = connexion_database();
		$reponse = $bdd->query(' ');	
		return $reponse;
	}
    function getUserByUserName($userName)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("SELECT * FROM `users` WHERE `users`.`userName` = :userName");	
		$req -> execute(array(
		'userName' => $userName
		));
		return $req;
	}
	function updateConnexionDate($id)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("UPDATE `users` SET `lastConnectionDate` = NOW() WHERE `users`.`id` = :id");	
		$req -> execute(array(
		'id' => $id
		));
		return date('Y-m-d H:i:s');
	}
	//hash password $password = hash("md5","admin");
	
?>