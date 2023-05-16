<?php 
	mysql_connect($_ENV["DB_HOST"],$_ENV["DB_USER"],$_ENV["DB_PASS"]) or die("Couldn't connet to SQL server");
	mysql_select_db($_ENV["DB_NAME"]) or die("Couldn'ttt select DB");
?>