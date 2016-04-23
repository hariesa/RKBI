<?php
include"config/config.php";
$tgl=date('d-M-Y');
?>
<link rel="alternate stylesheet" type="text/css" href="css/style.css" />
<div style="margin-top:80px;margin-left:50px">
<h1>Lembar Penandasahan</h1>
<table width="85%" border="0" style="border:2px solid #999;padding:20px;border-radius:20px" cellspacing="2" cellpadding="2">
  	<tr>
    	<Td align="center"><b>Status PenandasahanStatus Penandasahan</b></Td>
    	<Td width="63%">&nbsp;</Td>
    </tr>
  	<tr height="50px">
  	  <Td align="center" style="border:1px solid #999;border-radius:3px" valign="middle"><form id="form2" name="form2" method="post" action="">
  	    <input type="radio" name="radio" id="radio" value="radio" />
  	    <label for="radio"></label>
  	    Penandasahan
<label for="checkbox"></label>
      <input type="radio" name="radio2" id="radio2" value="radio2" />
      <label for="radio2"></label>
  	  Dikembalikan 
  	  <input type="radio" name="radio3" id="radio3" value="radio3" />
  	  <label for="radio3"></label>
  	  Di tolak
  	  </form></Td>
  	  <Td>&nbsp;</Td>
  </tr>
<?php
$sql=mysql_query("SELECT * FROM tb_rib_dummie WHERE id_rib='1'");
$data=mysql_fetch_array($sql);
?>
  	<tr>
  	  <Td><br><b>Nomor RIB</b></Td>
  	  <Td><br>
      : <input type="text" class="m-form" value="<?php echo $data['no_rib'] ?>" name="textfield22" id="textfield22" /></Td>
  </tr>
  	<tr>
  	  <Td><b>Tanggal RIB</b></Td>
  	  <Td>
      : <input type="text" class="m-form" name="textfield23" value="<?php echo $data['tgl_rib'] ?>" id="textfield23" /></Td>
  </tr>
  	<tr>
  	  <Td><b>Nomor Surat Penandasahan</b></Td>
  	  <Td>
      : <input type="text" name="textfield24" class="l-form" value="<?php echo $data['no_surat_penandasahan'] ?>" /></Td>
  </tr>
  	<tr>
  	  <Td><b>Tanggal Surat Penandasahan</b></Td>
  	  <Td>
      : <input type="text" name="textfield25" class="m-form" value="<?php echo $data['tgl_surat_penandasahan'] ?>" /></Td>
  </tr>
  	<tr>
  	  <Td><b>Dokumen Penandasahan</b></Td>
  	  <Td>
      : <input type="file" name="fileField" id="fileField" /></Td>
  </tr>
  	<tr>
  	  <Td colspan="2"><input type="submit" name="button" class="button" value="Simpan" /></Td>
  </tr>
</table>

<br>
<?php
$sql1=mysql_query("SELECT * FROM tb_reg_online");
$data1=mysql_fetch_array($sql1);

$sql=mysql_query("SELECT * FROM tb_rkbi_dummie WHERE id_kks='1'");
$data=mysql_fetch_array($sql);
?>

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
  <p>
    <input type="submit" name="button2" class="button" value="Save" />

  </p>
</form>
</div>