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
        <section class="article_showcase">
        <?php 
        while ($article = $articleList->fetch())
		{
            ?>
                <article>
                    <h2><a href="index.php?page=article&amp;id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></h2>
                    <p><?php echo $article['resume']; ?></p>
                    <p><?php echo date_format( date_create($article['datePost']) , "j/m/y H:i") ;  ?></p>
                </article>    
            <?php    
        }
        ?>
        </section>
        <nav>
            <ul>
                <li><a href="index.php?page=backoffice"><?php echo $backofficeAcces;?></a></li>	
            </ul>
        <nav>
    </body>	
<?php
$articleList->closeCursor(); // Termine le traitement de la requête 
include("./views/include/footer.php");
?>