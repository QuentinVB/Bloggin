<?php
//delete
	$msg="error";
	if(empty($_SESSION['userName']))
	{
		header("Location: ./index.php?page=auth");
	}
	else
	{
		include("./models/articleModel.php");
		$action = strip_tags($_GET['action']);
		$id = strip_tags($_GET['id']);
		if($action == "publish" )
		{
			publishArticle($id);
			$msg="published";
		}
		else if($action == "hide")
		{
			hideArticle($id);
			$msg="hidden";	
		}
		else
		{

		}
	}	
	include("./controlers/redirect.php");	
?>