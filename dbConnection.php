<?php 

$dbhost='<RDS DB Host End Point>';
$dbuser='<UserName?';
$dbpass="<Password>";
$database='<Database name>';

$conn= mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($database);

if(!$conn){
	die("Could not connect:".mysql_error());
}
?>