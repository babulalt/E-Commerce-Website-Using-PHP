<?php 
	$link=mysqli_connect("zerone-addon-8516-101-mariadb.zerone-4070-8516.svc.cluster.local","root","1wtjruZNz8") or die("Couldn't connet to SQL server");
	mysqli_select_db("ecommerce",$link) or die("Couldn'ttt select DB");
?>
