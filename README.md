# Bloggin
An extra minimalist blogging PHP MVC apps by QuentinVB. Still a few feature to implement and default css style. Use it freely to build up a blog page.

## Deploy
Just put the folder into an http server executing php >v5 ; execute the SQL file SQLStructureExport/full-dbrebuild.sql into your sql database and enjoy !

## BDD article :
- id
- titre
- resume
- contenu
- tags
- date post
- date lastEdit
- view
- published

## BDD users :
- id
- userName
- password
- lastConnexionDate

## Todo
### vue principale :
- affichage des la liste des articles :heavy_check_mark:
- tri par page :x:
- possibilité de choisir le nombre d'article affichés :x:
- tri par tags :x:
- afficher articles les plus vus :x:
- afficher article le plus vu et le plus récent :x:
### Vue article :
- affichage d'un article :heavy_check_mark:
- possibilité de naviguer a un article plus ancien ou plus récent :x:
- incrémenter un compteur de vue par article :heavy_check_mark:
- social media :x:
- mise en forme texte  :x:
### Vue de connexion :
- pouvoir s'identifier :heavy_check_mark:
### Vue d'administration :
- affichage de la liste des articles :heavy_check_mark:
- editer un article :heavy_check_mark:
- supprimer un article :heavy_check_mark:
- publier/masquer :heavy_check_mark:
- ajouter un article :heavy_check_mark:
### Vue d'édition 
- editeur :heavy_check_mark:
- sauvegarder :heavy_check_mark:
- sauvegarder et publier :x:
- mise en forme texte (wiki/markdown/phpbb ?) :x:
