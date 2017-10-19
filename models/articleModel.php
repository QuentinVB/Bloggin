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
	function createArticle($title,$resume,$content,$tags)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("INSERT INTO `articles` (`id`, `title`, `resume`, `content`, `tags`, `datePost`, `dateLastEdit`, `view`, `published`) VALUES (NULL, :title, :resumee, :content, :tags, '', NOW(), '0', '0')");	
		$req -> execute(array(
		'title' => $title,
		'resumee' => $resume,
		'content' => $content,
		'tags' => $tags,
		));
	}
	function editArticlebyId($id,$title,$resume,$content,$tags)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("UPDATE `articles` 
								SET 
								`title` = :title, 
								`resume` = :resumee, 
								`content` = :content, 
								`tags` = :tags, 
								`dateLastEdit` = NOW() 
								WHERE `articles`.`id` = :id;");	
		$req -> execute(array(
		'id' => $id,
		'title' => $title,
		'resumee' => $resume,
		'content' => $content,
		'tags' => $tags,
		));
	}
	/*
	function deleteMarker($id, $x,$y)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("DELETE FROM `cartedata` WHERE `cartedata`.`id` = :id AND `cartedata`.`x` = :x AND `cartedata`.`y` = :y");	
		$req -> execute(array(
		'id' => $id,
		'x' => $x,
		'y' => $y
		));
	}
*/
?>
