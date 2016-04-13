<?php
include "config/config.php";

$tgl=date('d-M-Y');
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<div style="margin-top:80px;margin-left:50px;">
<h1>Pendaftaran Pengajuan RKBI/Masterlist </h1>
<h2>Barang Bukan Sewa (Full Impor Non EPC)</h2>
<?php
$sql=mysql_query("SELECT * FROM tb_rkbi_dummie");
$data=mysql_fetch_array($sql);

$sql1=mysql_query("SELECT API, NPWP FROM kkks WHERE Kode_KKKS='382'");
$data1=mysql_fetch_array($sql1);
?>
<form id="form1" name="form1" method="post" action="">
<table width="85%" border="0" cellspacing="2" cellpadding="2" style="border:1px solid #999;padding:10px;">
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
    <td valign="top"><input type="text" disabled name="textfield6" class="l-form" value="<?php echo $data1['NPWP'] ?>" /> 
      <br>(By Login)</td>
    <td valign="top">Status Barang</td>
    <td valign="top">:</td>
    <td valign="top"><input name="textfield4" type="text" class="m-form" disabled value="Full Impor Non EPC" /> 
      <br>(mengikuti form pendaftaran yang dipilih)</td>
  </tr>
  <tr height="60px;">
    <td>Kontraktor KPS/KKS</td>
    <td>:</td>
    <td><input type="text" name="textfield7" disabled class="l-form" value="<?php echo $data['nama_kks'] ?>" /> 
      <br>(By Login)</td>
    <td>KPBC Pemasukan</td>
    <td>:</td>
    <td><input name="textfield13" type="text" id="textfield13" class="m-form" value="Balikpapan" /></td>
  </tr>
  <tr height="100px;">
    <td>Alamat</td>
    <td>:</td>
    <td><textarea disabled><?php echo $data['alamat'] ?></textarea>
      <br>(By Login)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr height="40px;">
    <td>Dasar Kontrak KPS/KKS</td>
    <td>:</td>
    <td><input type="text" name="textfield9" class="m-form" value="<?php echo $data['dsr_kontrak'] ?>" disabled /></td>
    <td colspan="3"><b><u>Kontak Korespondensi</u></b></td>
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
    <td><input type="text" class="l-form" name="textfield12" value="<?php echo $data1['API'] ?>" disabled /></td>
    <td><b><u>Kontak User</u></b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr height="40px;">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Nama Kontak</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield12" value="Nia"</td>
  </tr>
  <tr height="40px;">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No HP</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield12" value="081284920300"</td>
  </tr>
  <tr height="40px;">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" class="l-form" name="textfield12" value="nia.rama@total.com"</td>
  </tr>
</table>
</form>
<p>
    <input type="button" onclick="location.href='index.php?m=pendaftaran2';" class="button" value="Langkah 2" />
</p>
</div>