<?php
//controler
	if(empty($_SESSION['userName']))
	{
		header("Location: ./index.php?page=auth");
	}
	else
	{
		include("./models/articleModel.php");
		$articleList = getAllResumeArticles(); 
		include("./controlers/msgmanager.php");	
	    include("./views/backoffice.php");	
	}
?>