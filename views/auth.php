<?php
//view
include("./views/include/header.php");
?>
<body>
	<h1>Login</h1>
		<section id="auth">
		<form method="post" action="index.php?page=auth">
			
			<p>				
				<label for="username">Nom d'utilisateur</label> : <input type="text" name="username" id="username" placeholder="user" required/><br/>
				<label for="password">Mot de passe</label> : <input type="password" name="password" id="password" placeholder="password" required/><br/>
				<input type="submit" value="connexion" />
			</p>	
		</form>	

		<ul>
				<li><a href="index.php">Retour</a></li>
			</ul>	
	</section>
</body>
<?php
include("./views/include/footer.php");
?>