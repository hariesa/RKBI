<?php
session_start();
include"config/config.php";

$tgl=date('d-M-Y');
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<ul class="menu2">
	<li class="menuaktif"><a href="index.php?m=verifikasi1">Status Verifikasi</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi2">KIMAP</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi3">Verifikasi</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi4">Form 02 ML Penggolongan</a></li>
</ul>
<br>
<br>
<br>
<br>
<?php 
$sql=mysql_query("Select * from tb_reg_online");
$data=mysql_fetch_array($sql);

?>
<div style="padding:40px;">
			            <table width="85%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>Refference Number</td>
    <td><input type="text" value="<?php echo $data['reference_numb'] ?>" name="textfield16" id="textfield16" /></td>
    <td>&nbsp;</td>
    <td>Tanggal</td>
    <td><input type="text" value="<?php echo $tgl ?>" name="textfield17" id="textfield17" /></td>
  </tr>
  <tr>
    <td colspan="5">Status Verifikasi</td>
  </tr>
  <tr>
    <td><input name="" type="radio" value="">Accept</td>
    <td><input name="" type="radio" value="">Verified</td>
  </tr>
  <tr>
    <td colspan="5"><input type="submit" name="button" class="button" value="Simpan" /></td>
  </tr>
</table>
</b>
</div>

<br>

