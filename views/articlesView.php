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
        while ($article = $articleList->fetch())
		{
            ?>
                <article>
                    <h2><?php echo $article['title']; ?></h2>
                    <p><?php echo $article['resume']; ?> <a href="index.php?page=article&amp;id=<?php echo $article['id']; ?>">lire => </a></p>
                    <p><?php  echo $article['datePost'];  ?></p>
                </article>    
            <?php    
        }
        ?>
        </section>
    </body>	
<?php
$articleList->closeCursor(); // Termine le traitement de la requête date_format( , "j/m/y H:i")
include("./views/include/footer.php");
?>