<?php
session_start();
include"config/config.php";
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<ul class="menu2">
	<li class="menugaktif"><a href="index.php?m=verifikasi1">Status Verifikasi</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi2">KIMAP</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi3">Verifikasi</a></li>
    <li class="menuaktif"><a href="index.php?m=verifikasi4">Form 02 ML Penggolongan</a></li>
</ul>
<br>
<br>
<br>
<br>
<div style="padding:40px;">
<?php
$sql=mysql_query("SELECT * FROM tb_reg_online");
$data=mysql_fetch_array($sql);
?>
<table width="85%" border="1" cellspacing="2" cellpadding="2">
  <tr style="font-weight:bold" align="center">
    <td width="13%">KIMAP</td>
    <td width="18%">Uraian Barang</td>
    <td width="19%">Pengajuan KKKS</td>
    <td width="17%">Penilaian Konsultan</td>
    <td width="23%">Penilaian Migas</td>
  </tr>
  <tr align="center">
    <td>J.89 Chemical</td>
    <td><?php echo $data['uraian_sub'] ?></td>
    <td><?php echo $data['pengajuan_kkks'] ?></td>
    <td><?php echo $data['pengajuan_kkks'] ?></td>
    <td><input style="text-align:center" type="text" value="<?php echo $data['pengajuan_kkks'] ?>" /></td>
  </tr>
<!--  <tr>
    <td><select name="select2" id="select4">
    </select></td>
    <td><input name="textfield4" type="text" id="textfield13" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield14" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield15" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield16" size="8" /></td>
  </tr>
-->  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td><b>Total</b></td>
    <td>&nbsp;</td>
    <td><?php echo $data['pengajuan_kkks'] ?></td>
    <td><?php echo $data['pengajuan_kkks'] ?></td>
    <td><?php echo $data['pengajuan_kkks'] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<input type="submit" name="button" class="button" value="Simpan">
<br><br>
*) Form pada halaman ini sudah terisi otomatis by system
</b>
</div>

<br>

