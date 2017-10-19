<?php
//controler
	include("./models/articleModel.php");
	
	/*
	$backofficeAcces ="";
	if(empty($_SESSION['userName']))
	{
		$backofficeAcces = "Connexion";
	}
	else
	{
		$backofficeAcces = "Backoffice";
	}
	*/
	$id = strip_tags($_GET['id']);

	$article = getArticleById($id);
    include("./views/articleView.php");
?>


