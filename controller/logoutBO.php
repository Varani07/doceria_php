<?php
    include_once '../model/Login.php';
    
    Login::deslogar();
    header('Location: ../view/principal.php');
?>

