

<?php
    session_start();
    $_SESSION= array();//vider la session de ses données
    session_destroy();
    header('location:../login2.php')
?>