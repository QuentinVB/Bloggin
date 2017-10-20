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
                    <p><?php  echo date_format( date_create($article['datePost']) , "j/m/y H:i") ;  ?></p>
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