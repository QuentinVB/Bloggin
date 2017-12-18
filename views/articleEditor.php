<?php
//view
include("./views/include/header.php");
?>
<body>
	<?php
        include("./views/include/viewHeader.php");
    ?>
	<h1>Article editor</h1>
	<section>
		<form method="post" action="index.php?page=articleEditorSave&amp;action=<?php echo $action;if($action =="edit"){ echo "&id="; echo $article['id']; } ?>">
			<p>				
				<label for="title">Titre</label> : <input type="text" name="title" id="title"  value="<?php echo ($action =="edit")? $article['title'] :"";?>" required/><br/>
				<label for="resume">Resumé </label> : <input type="text" name="resume" id="resume" value="<?php echo ($action =="edit")? $article['resume'] :"";?>" required/><br/>
				<textarea rows="10" cols="200" name="content" id="content" placeholder="un article de qualité pour être bien référencé !"><?php echo ($action =="edit")? $article['content'] :"";?></textarea>
				<input type="hidden" id="id" name="id" value="<?php echo ($action =="edit")? $article['id'] :"";?>" /><br/>
				<label for="tags">Tags</label> : <input type="text" name="tags" id="tags" value="<?php echo ($action =="edit")? $article['tags'] :"";?>" required/><br/>				
				<input type="submit" value="sauvegarder" />
			</p>	
		</form>		
	</section>	
	<nav>
		<ul>
			<li><a href="index.php">Retour</a></li>
			<li><a href="index.php?page=disconnect">Deconnexion</a></li>
		</ul>
		<h2><?php echo $msg;?></h2>			
	</nav>
</body>
<?php
include("./views/include/footer.php");
?>