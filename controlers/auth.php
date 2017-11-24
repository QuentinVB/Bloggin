<?php
//controler
	include("./models/auth.php");
	include("./controlers/msgmanager.php");
    
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        //CONNECTION LOGIC HERE
        //1 get user based on userName
        $usersMatched = getUserByUserName($_POST['username']);
        while ($user = $usersMatched->fetch())
        {
            /* DEBUG
            echo count($usersMatched);
            echo "<br/>";
            echo $_POST['username'];
            echo "<br/>";
            echo $user['userName'];
            echo "<br/>";
            echo hash("md5",$_POST['password']);
            echo "<br/>";
            echo $user['password'];
            */
             //2 check password hash
            if($_POST['username'] == $user['userName'] && hash("md5",$_POST['password']) == $user['password'])//HERE IS THE SECURITY LOCK
            {
               //3 if success : 
               //create the sessions rights and allow access to the backoffice
               $_SESSION['id'] = $user['id'];
               $_SESSION['userName'] = $user['userName'];
               $_SESSION['passwordHash'] = $user['password'];
               $_SESSION['lastConnexionDate'] = updateConnexionDate($user['id']);
               header("Location: ./index.php?page=backoffice&msg=connected");
            }
            else
            {
                //4 if not : send back to the page
                $msg = "mot de passe ou utilisateur incorrect";
            }
        }   
    }
    include("./views/auth.php");
?>


