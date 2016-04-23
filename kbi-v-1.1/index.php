<?php
session_start();
$user=$_SESSION['user'];
include"config/config.php";
$tahun = date('Y');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RKBI Online</title>
</head>
<body class="body">
<div class="container">
<div class="head-header"><img src="images/back-baru.png" class="header" /></div>
<div class="menu-wrapper">
	<ul class="menu-horizontal">
    	<li><a href="index.php">Beranda</a></li>
    	<li><a href="index.php?m=input_data">Master Data</a></li>
        <?php
		if($user=='KKKS' || $user=='Admin') {
		?>
    	<li><a href="#">Daftar Online</a>
           	<ul class="submenu level-1">
		    	<li><a href="index.php?m=pendaftaran1">Full Impor Non EPC</a></li>
		    	<li><a href="#">EPCI</a></li>
		    	<li><a href="#">Barang Manufaktur</a></li>
		    	<li><a href="#">Barang Sewa</a></li>
            </ul>
        </li>
        <?php
		}
		else {
		?>
    	<li><a href="#" class="disable">Daftar Online</a></li>        
        <?php
		}
		if($user=='Loket' || $user=='Admin') {
		?>
    	<li><a href="index.php?m=loket1">Loket Fisik</a></li>
        <?php
		}
		else {
		?>
    	<li><a href="#" class="disable">Loket Fisik</a></li>
        <?php
		}
		if($user=='Direktur' || $user=='Admin') {
		?>
    	<li><a href="#">Approval Direktur</a>
           	<ul class="submenu level-1">
		    	<li><a href="index.php?m=acc_direktur">RKBI Sebelum Verifikasi</a></li>
		    	<li><a href="index.php?m=acc_direktur2">RKBI Setelah Verifikasi</a></li>
            </ul>
        </li>
        <?php
		}
		else {
		?>
    	<li><a href="#" class="disable">Approval Direktur</a></li>
        <?php
		}
		if($user=='Verifikator' || $user=='Admin') {
		?>
    	<li><a href="index.php?m=verifikasi1">Verifikasi</a></li>
        <?php
		}
		else {
		?>
    	<li><a href="#" class="disable">Verifikasi</a></li>
        <?php
		}
		?>
    	<li><a href="index.php?m=penandasahan">Penandasahan</a></li>
    	<li><a href="#">Realisasi</a></li>
    	<li><a href="#">Help</a></li>
    	<li><a href="login.php">Logout</a></li>
	</ul>
</div>
<div class="content"><?php include"content.php" ?></div>
<div class="footer">
Home | About | Terms & Conditions | Privacy Policy | Contact Us | RSS Feeds
<br>
Copyright <?php echo $tahun ?> ESDM. All Rights Reserved.
</div>
</div>
</body>
</html>
