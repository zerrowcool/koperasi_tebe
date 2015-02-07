<?php
include "../../inc/inc.koneksi.php";
$table	= 'users';
$user_id= $_POST['user_id'];
$sql 	= mysql_query("SELECT * FROM $table WHERE user_id= '$user_id'");
$row	= mysql_num_rows($sql);
if ($row>0){
	$input = "DELETE FROM $table WHERE user_id= '$user_id'";
	mysql_query($input);
}
?>