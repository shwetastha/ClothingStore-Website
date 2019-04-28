<?php
    // load values : Host, username, paswd, database
    $host="mymysql.senecacollege.ca"; // Host name.
    $db_user="uli705_191a25"; // MySQL username.
    $db_password="mcEE@4485"; // MySQL password.
    $database="uli705_191a25"; // Database name.

    // connect to database server
    $dbh=mysql_connect($host,$db_user,$db_password);
    // select specific database to use
    mysql_select_db($database);
?>