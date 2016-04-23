<?php
session_start();
include"config/config.php";
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<ul class="menu2">
	<li class="menugaktif"><a href="index.php?m=verifikasi1">Status Verifikasi</a></li>
    <li class="menuaktif"><a href="index.php?m=verifikasi2">KIMAP</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi3">Verifikasi</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi4">Form 02 ML Penggolongan</a></li>
</ul>
<br>
<br>
<br>
<br>
<div style="padding:40px;">
<?php
$sql1=mysql_query("SELECT * FROM tb_reg_online");
$data1=mysql_fetch_array($sql1);

$sql=mysql_query("SELECT * FROM tb_rkbi_dummie WHERE id_kks='1'");
$data=mysql_fetch_array($sql);

$sql2=mysql_query("SELECT API, NPWP FROM kkks WHERE Kode_KKKS='382'");
$data2=mysql_fetch_array($sql2);

?>

<table width="85%" border="0" cellspacing="2" cellpadding="2" style="border:1px solid #999;padding:20px;border-radius:20px">
  <tr height="40px;">
    <td colspan="3"><h2>DATA KKKS</h2></td>
    <td colspan="3"><h2>KONTRAK USER</h2></td>
  </tr>
  <tr height="40px;">
    <td width="20%">Nomor RKBI/Masterlist</td>
    <td width="3%">:</td>
    <td width="26%">
      <input type="text" name="textfield" class="m-form" id="textfield" value="<?php echo $data['no_rkbi'] ?>" />
    </td>
    <td width="17%">Sub Kontraktor</td>
    <td width="6%">:</td>
    <td width="28%"><input type="text" class="m-form" value="<?php echo $data['sub_kontrak'] ?>" id="textfield2" /></td>
  </tr>
  <tr height="40px;">
    <td>Tanggal RKBI/Masterlist</td>
    <td>:</td>
    <td><input type="text" name="textfield5" class="m-form" id="textfield5" value="<?php echo $data['tgl_rkbi'] ?>" /></td>
    <td>No Kontrak / tanggal</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield3" id="textfield3" value="<?php echo $data['no_kontrak'] ?>" /></td>
  </tr>
  <tr height="40px;">
    <td valign="top">NPWP</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" disabled name="textfield6" class="l-form" value="<?php echo $data2['NPWP'] ?>" /></td>
    <td valign="top">Status Barang</td>
    <td valign="top">:</td>
    <td valign="top"><input name="textfield4" type="text" class="m-form" disabled value="BUKAN SEWA" />
    <!--(mengikuti form pendaftaran yang dipilih)--></td>
  </tr>
  <tr height="40px;">
    <td>Kontraktor KPS/KKS</td>
    <td>:</td>
    <td><input type="text" name="textfield7" disabled class="l-form" value="<?php echo $data['nama_kks'] ?>" /></td>
    <td>KPBC Pemasukan</td>
    <td>:</td>
    <td><input name="textfield13" type="text" id="textfield13" class="m-form" value="Balikpapan" /></td>
  </tr>
  <tr height="70px;">
    <td>Alamat</td>
    <td>:</td>
    <td><textarea disabled><?php echo $data['alamat'] ?></textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr height="40px;">
    <td>Dasar Kontrak KPS/KKS</td>
    <td>:</td>
    <td><input type="text" name="textfield9" class="m-form" value="<?php echo $data['dsr_kontrak'] ?>" disabled /></td>
    <td colspan="3"><h2>KONTAK KORESPONDENSI</h2></td>
    </tr>
  <tr height="40px;">
    <td>Tanggal Kontrak</td>
    <td>:</td>
    <td><input type="text" name="textfield10" class="m-form" value="<?php echo $data['tgl_kontrak'] ?>" disabled /></td>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="textfield14" class="m-form" value="<?php echo $data['nama_kontak'] ?>" /></td>
  </tr>
  <tr height="40px;">
    <td>Masa Berlaku</td>
    <td>:</td>
    <td><input type="text" name="textfield11" class="l-form" value="<?php echo $data['berlaku'] ?>" disabled /></td>
    <td>No HP</td>
    <td>:</td>
    <td><input type="text" name="textfield15" class="m-form" value="<?php echo $data['no_kontak'] ?>" /></td>
  </tr>
  <tr height="40px;">
    <td>Daerah Operasi</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield12" value="<?php echo $data['daerah_op'] ?>" disabled /></td>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield12" value="marcella@total.com" /></td>
  </tr>
  <tr height="40px;">
    <td>No API</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield12" value="<?php echo $data2['API'] ?>" disabled /></td>
  </tr>
  <tr height="40px;">
    <td>Jenis Kegiatan</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield12" value="EKSPLOITASI" disabled /></td>
  </tr>
</table>

<p>


<form id="form1" name="form1" method="post" action="">
   
  <table width="99%" border="1" cellspacing="2" cellpadding="2">
   
    <tr align="center" style="font-weight:bold">
      <td width="10%">KIMAP</td>
      <td width="10%">Sub Kimap</td>
      <td width="20%">Uraian</td>
      <td width="10%">Kondisi</td>
      <td width="10%">Pos Tarif</td>
      <td width="7%">Jumlah</td>
      <td width="7%">Satuan</td>
      <td width="10%">Perkiraan Nilai<br>US$</td>
      <td width="7%">Status Barang</td>
      <td width="7%">Status OP</td>
      <td width="25%">Keterangan</td>
    </tr>
    <tr align="center">
      <td>J</td>
      <td><?php echo $data1['sub_kimap'] ?></td>
      <td><?php echo $data1['uraian_sub'] ?></td>
      <td><?php echo $data1['kondisi'] ?></td>
      <td><?php echo $data1['pos_tarif'] ?></td>
      <td><?php echo $data1['jumlah'] ?></td>
      <td><?php echo $data1['satuan'] ?></td>
      <td><?php echo $data1['perkiraan_nilai'] ?></td>
      <td>
      <select>
      	<option>ADP</option>
      	<option>BTM_MFG</option>
      	<option>LOKAL_FAB</option>
      	<option>OK</option>
      </select>
      </td>
      <td>
      <select>
      	<option>Y</option>
      	<option>T</option>
      </select>
      </td>
      <td><?php echo $data1['ket'] ?></td>
    </tr>
<!--   <tr>
      <td><label for="select"></label>
      <input name="textfield17" type="text" id="textfield17" size="8" /></td>
      <td><input name="textfield19" type="text" id="textfield19" size="8" /></td>
      <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="8" /></td>
      <td><label for="select2"></label>
      <input name="textfield21" type="text" id="textfield21" size="8" /></td>
      <td><label for="textfield2"></label>
      <input name="textfield2" type="text" id="textfield2" size="8" /></td>
      <td><label for="textfield3"></label>
      <input name="textfield3" type="text" id="textfield3" size="8" /></td>
      <td><label for="textfield4"></label>
      <input name="textfield4" type="text" id="textfield4" size="8" /></td>
      <td><label for="textfield5"></label>
      <input name="textfield5" type="text" id="textfield5" size="8" /></td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" /></td>
    </tr>
-->  </table>

<!--  <p>
    <input type="submit" name="button2" id="button2" value="Langkah 1" />
    <input type="submit" name="button" id="button" value="Langkah 3" />
  </p>
--></form>
</b>
</div>

<br>

