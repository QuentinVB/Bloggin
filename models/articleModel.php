<?php
//model
	include("./functions/database_connexion.php");
	function getAllArticles()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query('SELECT * FROM `articles` ');	
		return $reponse;
	}
	function getAllPublishedResumeArticles()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query('SELECT `id`,`title`,`resume`,`datePost`,`dateLastEdit`,`view`,`published` FROM `articles` WHERE `published` is True');	
		return $reponse;
	}
	function getAllResumeArticles()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query('SELECT `id`,`title`,`resume`,`datePost`,`dateLastEdit`,`view`,`published` FROM `articles`');	
		return $reponse;
	}
	function getArticleById($id)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("SELECT * FROM `articles` WHERE `articles`.`id` = :id");	
		$req -> execute(array(
		'id' => $id
		));		
		return $req;
	}
	/*function getArticleByIdInterval($idFrom,$idTo)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("SELECT * FROM `articles` WHERE `cartedata`.`classes` = :classes");	
		$req -> execute(array(
		'classes' => $classes
		));		
		return $req;
	}*/
?>