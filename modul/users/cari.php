<?php
// www.contoh-ta.com
//author : asep setiawan & Team
ini_set('display_errors', 1); ini_set('error_reporting', E_ERROR);
include "../../inc/inc.koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table			= 'users';
$user_id		= $_POST['user_id'];
$text	= "SELECT * FROM $table WHERE user_id = '$user_id'";
$sql 	= mysql_query($text);
$row	= mysql_num_rows($sql);
if ($row > 0){
while ($r=mysql_fetch_array($sql)){	
	$data['user_id']	= $r[user_id];
	$data['password']	= $r[password];
	echo json_encode($data);
}
}else{
	$data['user_id']	= '';
	$data['password']	= '';
	echo json_encode($data);
}
?>