<?php
//view
include("./functions/toolbox.php");
include("./views/include/header.php");
?>
    <body>
        <?php
            include("./views/include/viewHeader.php");
        ?>
        <section>
            <p>Introduction text</p>
        </section>
        <section>
        <?php 
        while ($articleData = $article->fetch())
		{
        ?>
            <article>
                <h2><?php echo $articleData['title']; ?></h2>
                <p><?php echo $articleData['resume']; ?> </p>
                <p>Posté le <?php echo $articleData['datePost'];  ?></p>
                
                <p><?php echo $articleData['content']; ?> </p>
                <p><?php echo $articleData['dateLastEdit'];  ?></p>
                
                <p>Tags :<?php echo $articleData['tags']; ?> Vues : <?php echo $articleData['view']; ?></p>
            </article>    
        <?php    
        }
        ?>
        <nav>
        <a href="index.php">retour</a>
        </nav>
        </section>
    </body>	
<?php
$article->closeCursor(); // Termine le traitement de la requête date_format( , "j/m/y H:i")
include("./views/include/footer.php");
?>