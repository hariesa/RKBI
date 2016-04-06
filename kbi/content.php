<?php


//HALAMAN BERANDA RKBI ONLINE
if($_GET['m']=='' || ($_GET['m']=='beranda')) {
?>
	<div style="margin-top:50px;margin-left:40px;"><img src="images/welcome.png" width="212" height="212" /></div>
    <div style="font-size:18px;color:#06F;margin-left:50px">Welcome to Our System ..</div>
<?php
}


//INPUT DATA KBH DAN KIMAP DAN GRUP KIMAP
if($_GET['m']=='input_data') {
	include"input_data.php";
}

//PENDAFTARAN LANGKA 1
if($_GET['m']=='pendaftaran1') {
	include"pendaftaran1.php";
}

//PENDAFTARAN LANGKA 2
if($_GET['m']=='pendaftaran2') {
	include"pendaftaran2.php";
}


//PENDAFTARAN LANGKA 3
if($_GET['m']=='pendaftaran3') {
	include"pendaftaran3.php";
}

//PENDAFTARAN LANGKA 4
if($_GET['m']=='pendaftaran4') {
	include"pendaftaran4.php";
}

//LOKET PENERIMAAN FISIK
if($_GET['m']=='loket1') {
	include"loket1.php";
}

//LOKET PENERIMAAN FISIK Langkah 2
if($_GET['m']=='loket2') {
	include"loket2.php";
}

//Verifikasi
if($_GET['m']=='verifikasi1') {
	include"verifikasi1.php";
}

//Penandasahan
if($_GET['m']=='penandasahan') {
	include"penandasahan.php";
}

?>