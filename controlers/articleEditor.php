<?php
	if(empty($_SESSION['userName']))
	{
		header("Location: ./index.php?page=auth");
	}
	else
	{
		include("./models/articleModel.php");

		$action = strip_tags($_GET['action']);

		if($action == "edit")
		{
			$id = strip_tags($_GET['id']);
			$articleList = getArticleById($id);
			$article = $articleList->fetch();
			$articleList->closeCursor(); // Termine le traitement de la requête
		}
		else if($action == "create")
		{
			//nothing todo on create...
		}
		else
		{
			//error, redirect to home page
		}
		include("./controlers/msgmanager.php");	
	    include("./views/articleEditor.php");	
	}
?>