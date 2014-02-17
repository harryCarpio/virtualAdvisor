<?php

    define("DB_HOST",'localhost');
    define("DB_PORT",3306);
    define("DB_USERNAME",'root');
    define("DB_PASSWORD",'stdstd');
    define("DB_DBNAME",'virtual_advisor');

    $host = DB_HOST;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;
    
    $conn = mysql_connect($host, $username, $password);
    
?>
