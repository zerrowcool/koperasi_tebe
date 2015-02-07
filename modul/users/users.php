<script language="javascript" src="modul/users/ajax.js"></script>
<style type="text/css">
button {
	margin: 2px; 
	position: relative; 
	padding: 4px 8px 4px 4px; 
	cursor: pointer;   
	list-style: none;
}
button span.ui-icon {
	float: left; 
	margin: 0 4px;
}
#menu-tombol {
	padding-bottom:10px;
	padding:5px 5px 5px 5px;
}
#tombol-tambah{
	float:left;
	width:250px;
}
#tombol-cari{
	float:right;
	width:550px;
	text-align:right;
}
#tampil_data{
	margin-top:30px;
}
</style>
<?php
// www.contoh-ta.com
//author : asep setiawan & Team
ini_set('display_errors', 1); ini_set('error_reporting', E_ERROR);
echo "<div id='dalam_content'>
<h2>DAFTAR ANGGOTA</h2>
<div id='menu-tombol'>
<div id='tombol-tambah'>
<button class='ui-state-default ui-corner-all' id='tambah'>
<span class='ui-icon ui-icon-circle-plus'></span>Tambah
</button>
</div>
<div id='tombol-cari'>
<input type='text' id='txt_cari' size='30'>
<button class='ui-state-default ui-corner-all' id='cari'>
<span class='ui-icon ui-icon-search'></span>Cari
</button>
</div>
</div>
<div id='tampil_data'></div>
</div>";
echo "<div id='form_input' title='Tambah/Edit Data'>
<table width='100%'>
<tr>
<td>Nama Pengguna</td>
<td width='2%'>:</td>
<td><input type='text' name='id_user' id='id_user' size='10' maxlength='10' class='input'></td>
</tr>
<tr>
<td>Password</td>
<td width='2%'>:</td>
<td><input type='text' name='password' id='password' size='20' maxlength='20' class='input'></td>
</tr>
</table>
</div>";
?>