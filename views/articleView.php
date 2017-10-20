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
                <p>Posté le <?php echo date_format( date_create($articleData['datePost']) , "j/m/y H:i") ;   ?></p>
                
                <p><?php echo $articleData['content']; ?> </p>
                <p><?php echo date_format( date_create($articleData['dateLastEdit']) , "j/m/y H:i") ; ?></p>
                <p>Tags :<?php echo $articleData['tags']; ?> Vues : <?php echo $articleData['view']; ?></p>
            </article>    
        <?php    
        }
        ?>

        </section>
        <nav>
        <ul>
            <li><a href="index.php?page=backoffice"><?php echo $backofficeAcces;?></a></li>	
            <li><a href="index.php">retour</a></li>	
        </ul>
        
        </nav>
    </body>	
<?php
$article->closeCursor(); // Termine le traitement de la requête date_format( , "j/m/y H:i")
include("./views/include/footer.php");
?>