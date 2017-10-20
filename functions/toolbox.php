<?php
function convert_month($m)
{
	switch ($m)
	{
	case 1:$m='janvier';
	break;
	case 2:$m='février';
	break;
	case 3:$m='mars';
	break;
	case 4:$m='avril';
	break;
	case 5:$m='mai';
	break;
	case 6:$m='juin';
	break;
	case 7:$m='juillet';
	break;
	case 8:$m='août';
	break;
	case 9:$m='septembre';
	break;
	case 10:$m='octobre';
	break;
	case 11:$m='novembre';
	break;
	case 12:$m='décembre';
	break;
	}
	return $m ;
}
function deleteButton($articleId,$pageToRedirect)
{
    if(!empty($_SESSION['userName']))
    {
        $onclick="";
        switch ($pageToRedirect) 
        {
            case 'backoffice':
               $onclick="return confirm('Confirmer suppression ?')";
                break;
            default:
                $onclick="";
                break;
        }
        ?><a href="index.php?page=deleteArticle&amp;redirect=<?php 
        echo $pageToRedirect ;
        ?>&amp;id=<?php 
        echo $articleId; 
        ?>" onclick="<?php
        echo $onclick;
        ?>"><img src="./assets/img/delete.png"/> effacer</a><?php
    }
}
function publishButtonToggle($articleId,$publishStatus,$pageToRedirect)
{
    if(!empty($_SESSION['userName']))
    {
		$onclick="";
		$toggleText ="";
		$action="";
        switch ($publishStatus) 
        {    
			case false: //the article is a stub so publish it
				$onclick="return confirm('Publier l\'Article ?')";
				$toggleText ="Publier";
				$action="publish";				
				break;
			case true: //the article is already published so mask it
				$onclick="return confirm('Masquer la publication ?')";
				$toggleText ="Masquer";
				$action="hide";
				break;
            default:
                $onclick="";
                break;
        }
        ?><a href="index.php?page=publishArticle&amp;redirect=<?php 
        echo $pageToRedirect ;
        ?>&amp;action=<?php 
        echo $action; 
        ?>&amp;id=<?php 
        echo $articleId; 
        ?>" onclick="<?php
        echo $onclick;
        ?>"><?php echo $toggleText;?></a><?php
    }
}
?>