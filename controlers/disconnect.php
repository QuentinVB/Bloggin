<?php
    $_SESSION['userName'] = NULL;
    session_unset();
    session_destroy();
    header('Location: ./index.php?msg=disconnected');
?>