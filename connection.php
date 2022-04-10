<?php
        define('db_user', 'root');
        define('db_pass', '');
        define('db_host', 'localhost');
        define('db_name', 'rental_home_system');
        
        $con= new mysqli(db_host,db_user, db_pass, db_name) or exit("could not connect database");
        
        
?>
 
