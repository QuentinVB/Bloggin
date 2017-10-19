<?php
//save
	include("./models/model.php");

	if($_SESSION['rightsLevel']>0)
	{
		$id = strip_tags($_GET['id']);
		deleteArticle($id,$x,$y);
	}
	$msg="delete";
	include("./controlers/redirect.php");
?>