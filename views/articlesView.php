<?php
//view
include("./functions/toolbox.php");
include("./views/include/header.php");
?>
    <body>
        <header>
            <h1>Blog Name</h1>
            <nav>Navigation barre<nav>
        </header>
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
                <p><?php echo $article['resume']; ?> <a herf="index.php?page=article">lire => </a></p>
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