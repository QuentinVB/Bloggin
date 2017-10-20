<?php
//view
include("./views/include/header.php");
?>
<body>
	<?php
        include("./views/include/viewHeader.php");
    ?>
	<h1>Article Management</h1>
	<section>
		<h2>Liste des articles du blog</h2>
		<table>
			<thead>
				<tr>
					<td>Titre</td>
					<td>Resumé</td>
					<td>Date dernière édition</td>
					<td>Date publication</td>
					<td>Vues</td>
					<td>Publié ?</td>
					<td>Actions</td>					
				</tr>
			</thead>
			<tbody>
				<?php
				while ($article = $articleList->fetch())
				{
				?>
				<tr>
					<td><?php echo $article['title']; ?></td>
					<td><?php echo $article['resume']; ?></td>
					<td><?php echo date_format( date_create($article['dateLastEdit']) , "j/m/y H:i") ; ?></td>
					<td><?php echo date_format( date_create($article['datePost']) , "j/m/y H:i") ; ?></td>
					<td><?php echo $article['view']; ?></td>					
					<td><?php echo $article['published']==TRUE?"publié":"brouillon"; ?></td>
					<td>	
						<a href="index.php?page=articleEditor&amp;action=edit&amp;id=<?php echo $article['id']; ?>"><img src="./assets/img/pencil.png"/> modifier</a>
						&nbsp;
						<?php deleteButton($article['id'],"backoffice");?>
						&nbsp;
						<?php publishButtonToggle($article['id'],$article['published'],"backoffice");?>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</section>
	<nav>
		<ul>
			<li><a href="index.php?page=articleEditor&amp;action=create">Ecrire nouvel article</a></li>
			<li><a href="index.php">Retour</a></li>
			<li><a href="index.php?page=disconnect">Deconnexion</a></li>
		</ul>
		<h2><?php echo $msg;?></h2>			
	</nav>
</body>
<?php
$articleList->closeCursor(); // Termine le traitement de la requête
include("./views/include/footer.php");
?>
