<?php
$host = "localhost";
$user = "csjpakor";
$password = "6Ab72L!sCi4J(g#@";
$datbase = "csjpakor_newdb";
@mysql_connect($host,$user,$password); 
/*@symbol is use for remove the al type of warnings*/
mysql_select_db($datbase);
error_reporting(1);
?>