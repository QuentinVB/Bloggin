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
	$articleList = getAllArticle();
    include("./views/articlesView.php");
?>


