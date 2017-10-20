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
		$id = strip_tags($_GET['id']);
		deleteArticle($id);
		$msg="delete";
	}	
	include("./controlers/redirect.php");	
?>