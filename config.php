<?php

    define("DB_HOST",'127.0.0.0');
    define("DB_PORT",3306);
    define("DB_USERNAME",'advisor');
    define("DB_PASSWORD",'stdstd');
    define("DB_DBNAME",'VIRTUAL_ADVISOR');
    
    $conn = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
    
?>
