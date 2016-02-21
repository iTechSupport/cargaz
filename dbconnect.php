<?php

	 $DB_host = "localhost";
	 $DB_user = "19056347_cargaz";
	 $DB_pass = "I0ngrl1k";
	 $DB_name = "19056347_cargaz";
	 
	 $MySQLi_CON = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLi_CON->connect_errno)
     {
         die("ERROR : -> ".$MySQLi_CON->connect_error);
     }

?>