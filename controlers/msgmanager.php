<?php
    $msg = "";
    if(isset($_GET['msg']) && $_GET['msg'] == 0)
    {
        switch ($_GET['msg']) {
            case 'add':
                $msg = "Ajout réussi !";
                break;					
            case 'delete':
                $msg ="Suppression réussie !";
                break;
            case 'edit':
                $msg = "Edition réussie !";
                break;
            case 'connected':
                $msg = "Connexion réussie !";
                break;
            case 'disconnected':
                $msg = "Déconnexion réussie !";
                break;
            case 'published':
                $msg = "Article publié";
                break;
            case 'hidden':
                $msg = "Article masqué";
                break;    
            default:
                $msg = "yup !";
                break;
        }
    }
?>