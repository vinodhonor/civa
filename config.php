<?php 

	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', '');

  
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect:' . mysql_error());
}
mysql_select_db("test_civa", $con);


?>
