<?php
//controler
	include("./models/articleModel.php");
	$backofficeAcces ="";
	if(empty($_SESSION['userName']))
	{
		$backofficeAcces = "Connexion";
	}
	else
	{
		$backofficeAcces = "Backoffice";
	}
	$articleList = getAllPublishedResumeArticles();
    include("./views/articlesView.php");
?>