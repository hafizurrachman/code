<?php
session_start();

include "config.php";

$get=@$_GET['get'];

//kode login admin
if(isset($_POST['login'])){
	$namapengguna=$_POST['namapengguna'];
	$katasandi=md5($_POST['katasandi']);
	$sql=mysql_query("select * from pengguna where pengguna_nama='$namapengguna' and pengguna_password='$katasandi'") or die (mysql_error());
	$data=mysql_fetch_array($sql);
	if($data['pengguna_nama']!=$namapengguna || $data['pengguna_password']!=$katasandi){
		header("location:index.php");
	}else{
		header("location:admin.php");
		$_SESSION['pengguna']=$namapengguna;
	}
}

//kode logout
if($get=='logout') {
	session_destroy();
	header("location:index.php");
}

//kode simpan pengguna
if(@$_POST['simpanpengguna']){
	$katasandi=md5($_POST['katasandi']);
	mysql_query("insert into pengguna values('','$_POST[nama]','$_POST[alamat]','$katasandi')")or die(mysql_error());
	header("location:admin.php?page=pengguna");
}

//hapus pengguna
if(@$_GET['idpengguna']){
	mysql_query("delete from pengguna where pengguna_id='$_GET[idpengguna]'")or die(mysql_error());
	header("location:admin.php?page=pengguna");
}

//hapus obyek
if(@$_GET['idobyek']){
	mysql_query("delete from obyek where obyek_id='$_GET[idobyek]'")or die(mysql_error());
	header("location:admin.php?page=dataobyek");
}
?>