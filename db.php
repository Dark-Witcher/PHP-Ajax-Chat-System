<?php

    $host = "localhost";
    $user = "dark_witcher";
    $pass = "Black_Drag0n";
    $db_name = "chat";

    $con = new mysqli($host, $user, $pass, $db_name);

    function formatDate($date) {
        return date('g:i a', strtotime($date));
    }

?>
