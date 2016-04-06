<?php 
$tahun = date('Y');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RKBI Online</title>
</head>
<body>
<div class="container">
<div><img src="images/header-5.png" class="header" /></div>
<div class="menu-wrapper">
	<ul class="menu-horizontal">
    	<li><a href="index.php">Beranda</a></li>
    	<li><a href="index.php?m=input_data">Input Data</a></li>
    	<li><a href="#">Pendaftar Online</a>
           	<ul class="submenu level-1">
		    	<li><a href="index.php?m=pendaftaran1">Full Impor Non EPC</a></li>
		    	<li><a href="#">EPCI</a></li>
		    	<li><a href="#">Barang Manufaktur</a></li>
		    	<li><a href="#">Barang Sewa</a></li>
            </ul>
        </li>
    	<li><a href="index.php?m=loket1">Loket Fisik</a></li>
    	<li><a href="#">Approval Direktur</a></li>
    	<li><a href="index.php?m=verifikasi1">Verifikasi</a></li>
    	<li><a href="index.php?m=penandasahan">Penandasahan</a></li>
    	<li><a href="#">Realisasi</a></li>
    	<li><a href="#">Help</a></li>
	</ul>
</div>
<div class="content"><?php include"content.php" ?></div>
<div class="footer">&copy; SKK Migas. <?php echo $tahun ?></div>
</div>
</body>
</html>
