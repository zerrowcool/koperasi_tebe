<script type="text/javascript">
$(function() {
	$("#theTable tr:even").addClass("stripe1");
	$("#theTable tr:odd").addClass("stripe2");
	$("#theTable tr").hover(
		function() {
			$(this).toggleClass("highlight");
		},
		function() {
			$(this).toggleClass("highlight");
		}
	);
});
function editRow(ID){
	var user_id = ID;
	var pilih = confirm('Data yang akan mengubah  = '+user_id+ '?');
	if (pilih==true) {
	$.ajax({
		type	: "POST",
		url		: "modul/users/cari.php",
		data	: "user_id="+user_id,
		dataType : "json",				  
		success	: function(data){
			$("#user_id").val(ID);
			$("#password").val(data.id);
			
			$("#nomor").attr("disabled",true);
			$('#form_input').dialog('open');
			return false;
		}
	});
	}
}
function deleteRow(user_id) {
	var id	= user_id;
   var pilih = confirm('Data yang akan dihapus  = '+id+ '?');
	if (pilih==true) {
		$.ajax({
			type	: "POST",
			url		: "modul/users/hapus.php",
			data	: "id="+id,
			success	: function(data){
				$("#tampil_data").load("modul/users/tampil_data.php");
			}
		});
	}
}
</script>
<?php
// www.contoh-ta.com
//author : asep setiawan & Team
include '../../inc/inc.koneksi.php';
ini_set('display_errors', 1); ini_set('error_reporting', E_ERROR);
$cari	= $_GET['cari'];

$where	= " WHERE user_id LIKE '%$cari%' OR password LIKE '%$cari%'";

echo "<table id='theTable' width='100%'>
		<tr>
			<th width='5%'>No</th>
			<th>Nama Pengguna</th>
			<th>Password</th>
			<th width='10%'>Aksi</th>
		</tr>";
	$sql	= "SELECT * 
				FROM users
				$where
				ORDER BY user_id";
	$query	= mysql_query($sql);
	
	$no=1;
	while($rows=mysql_fetch_array($query)){
		echo "<tr>
				<td align='center'>$no</td>
				<td align='center'>$rows[user_id]</td>
				<td>$rows[password]</td>
				
				<td align='center'>
				<a href='javascript:editRow(\"{$rows[noanggota]}\")'>Edit</a>
				<a href='javascript:deleteRow(\"{$rows[noanggota]}\")'>Hapus</a>			
				</td>
			</tr>";
	$no++;
	}
echo "</table>";
?>