<?php
	if(empty($_SESSION['userName']))
	{
		header("Location: ./index.php?page=auth");
	}
	else
	{
		include("./models/articleModel.php");

		$action = strip_tags($_GET['action']);

		if($action == "edit" && isset($_POST['id']))
		{
			$idGet = strip_tags($_GET['id']);
			$idPost = strip_tags($_POST['id']);
			if($idGet==$idPost)
			{
				$id = $idPost;
				$title = strip_tags($_POST['title']);
				$resume= strip_tags($_POST['resume']);
				$content = strip_tags( $_POST['content']);
				$tags = strip_tags( $_POST['tags']);
			}
			editArticlebyId($id,$title,$resume,$content,$tags);
			header("Location: ./index.php?page=backoffice&msg=edit");
		}
		else if($action == "create")
		{

		}
		else
		{

		}
		include("./controlers/msgmanager.php");	
	    include("./views/articleEditor.php");	
	}
?>