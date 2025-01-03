<?php
    $db_name = 'mysql:host=localhost;cintacake=cinta_cake';
    $user_name = 'root';
    $user_password = '';

    $conn = new cintacake($db_name, $user_name, $user_password);

    if($conn){
        echo "connected"; 
    }
?>