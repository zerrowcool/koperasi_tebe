<?php
include "../../inc/inc.koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table		="users";
$user_id		=$_POST[user_id];
$password		=$_POST[password];

$pwd	=md5('koperasi');
$sql = mysql_query("SELECT *
				   FROM $table 
				   WHERE user_id= '$user_id'");
$row	= mysql_num_rows($sql);
if ($row>0){
	$input	= "UPDATE $table SET user_id	='$user_id',
								password		='$password',
					WHERE user_id= '$user_id'";
	mysql_query($input);								
	echo "<b>Data Sukses diubah</b>";
}else{
	$input = "INSERT INTO $table (user_id,password)
				VALUES('$user_id','$password')";
	mysql_query($input);
	echo "<b>Data sukses disimpan</b>";
}	
?>