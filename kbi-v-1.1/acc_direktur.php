<?php
include"config/config.php";

$tgl=date('d-M-Y');
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<br>
<br>
<?php 
$sql1=mysql_query("Select * from tb_reg_online");
$data1=mysql_fetch_array($sql1);

$sql=mysql_query("SELECT * FROM tb_rkbi_dummie WHERE id_kks='1'");
$data=mysql_fetch_array($sql);
?>
<div style="padding:40px;">
<h1>Approval Direktur</h1><br>
<table width="85%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>Refference Number</td>
    <td><input type="text" value="<?php echo $data1['reference_numb'] ?>" name="textfield16" id="textfield16" /></td>
    <td>&nbsp;</td>
    <td>Tanggal</td>
    <td><input type="text" value="<?php echo $tgl ?>" name="textfield17" id="textfield17" /></td>
  </tr>
  <tr>
    <td colspan="2">Status Verifikasi</td>
  </tr>
  <tr>
    <td><input name="" type="radio" value="">Disposisi</td>
    <td><input name="" type="radio" value="">Di tolak</td>
    <td>&nbsp;</td>
    <td colspan="2">Catatan Direktur</td>
  </tr>
  <tr>
    <td><input type="submit" name="button" class="button" value="Simpan" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><textarea></textarea></td>
  </tr>
</table>
</b>
<br>

<table width="85%" border="0" cellspacing="2" cellpadding="2" style="border:1px solid #999;padding:20px;border-radius:20px">
  <tr height="40px;">
    <td width="20%"><b>Nomor RKBI/Masterlist</td>
    <td width="6%"><b>:</td>
    <td width="28%">
      <?php echo $data['no_rkbi'] ?>
    </td>
    <td width="20%"><b>Sub Kontraktor</td>
    <td width="6%"><b>:</td>
    <td width="26%"><?php echo $data['sub_kontrak'] ?></td>
  </tr>
  <tr height="40px;">
    <td><b>Tanggal RKBI/Masterlist</td>
    <td><b>:</td>
    <td><?php echo $data['tgl_rkbi'] ?></td>
    <td><b>No Kontrak / tanggal</td>
    <td><b>:</td>
    <td><?php echo $data['no_kontrak'] ?></td>
  </tr>
  <tr height="40px;">
    <td><b>NPWP</td>
    <td><b>:</td>
    <td><?php echo $data['npwp'] ?></td>
    <td><b>Status Barang</td>
    <td><b>:</td>
    <td>Full Impor Non EPC</td>
  </tr>
  <tr height="40px;">
    <td><b>Kontraktor KPS/KKS</td>
    <td><b>:</td>
    <td><?php echo $data['nama_kks'] ?></td>
    <td><b>KPBC Pemasukan</td>
    <td><b>:</td>
    <td>Balikpapan</td>
  </tr>
  <tr height="100px;">
    <td><b>Alamat</td>
    <td><b>:</td>
    <td><?php echo $data['alamat'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr height="40px;">
    <td><b>Dasar Kontrak KPS/KKS</td>
    <td><b>:</td>
    <td><?php echo $data['dsr_kontrak'] ?></td>
    <td colspan="3"><b><u>Kontak Korespondensi</u></b></td>
    </tr>
  <tr height="40px;">
    <td><b>Tanggal Kontrak</td>
    <td><b>:</td>
    <td><?php echo $data['tgl_kontrak'] ?></td>
    <td><b>Nama</td>
    <td><b>:</td>
    <td><?php echo $data['nama_kontak'] ?></td>
  </tr>
  <tr height="40px;">
    <td><b>Masa Berlaku</td>
    <td><b>:</td>
    <td><?php echo $data['berlaku'] ?></td>
    <td><b>Email/HP</td>
    <td><b>:</td>
    <td><?php echo $data['no_kontak'] ?></td>
  </tr>
  <tr height="40px;">
    <td><b>Daerah Operasi</td>
    <td><b>:</td>
    <td><?php echo $data['daerah_op'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
<form id="form1" name="form1" method="post" action="">
   
  <table width="95%" border="1" cellspacing="2" cellpadding="2">
   
    <tr align="center" style="font-weight:bold">
      <td width="10%">KIMAP</td>
      <td width="10%">Sub Kimap</td>
      <td width="20%">Uraian</td>
      <td width="10%">Kondisi</td>
      <td width="10%">Pos Tarif</td>
      <td width="7%">Jumlah</td>
      <td width="7%">Satuan</td>
      <td width="10%">Perkiraan Nilai</td>
      <td width="20%">Keterangan</td>
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
      <td><?php echo $data1['ket'] ?></td>
    </tr>
		</table>
</form>
<br>
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
    <td><?php echo $data1['uraian_sub'] ?></td>
    <td><?php echo $data1['pengajuan_kkks'] ?></td>
    <td><?php echo $data1['pengajuan_kkks'] ?></td>
    <td><?php echo $data1['pengajuan_kkks'] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td><b>Total</b></td>
    <td>&nbsp;</td>
    <td><?php echo $data1['pengajuan_kkks'] ?></td>
    <td><?php echo $data1['pengajuan_kkks'] ?></td>
    <td><?php echo $data1['pengajuan_kkks'] ?></td>
  </tr>
</table>

</div>

<br>

