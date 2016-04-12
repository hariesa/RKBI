<?php
include "config/config.php";

$tgl=date('d-M-Y');
?>

<style>
		  .button {
			  width: auto;
			  padding: 4px;
			  height:30px;
			  background:#09F;
			  border:0;
			  color:#FFF;
			  font-weight:bold;
			  border-radius:5px;
			  cursor:pointer;
			  text-decoration: none;
			  margin-right: 4px;
		  }
		  .button:hover {
			  color:#09F;
			  background:#fff;
			  border: 1px solid #09C;
		  }
</style>
<?php
$sql=mysql_query("SELECT * FROM tb_reg_online");
$data=mysql_fetch_array($sql);

?>
<div style="margin-top:80px;margin-left:50px">
<form id="form1" name="form1" method="post" action="">
<h1>Pengisian Data KIMAP</h1>
  <table border="1" cellspacing="2" cellpadding="2" width="95%">
    <tr>
      <td colspan="9"><input name="" id="button" type="button" value="Tambah Data" /> </td>
      <td width="10%">Search </td>
      <td colspan="5"><input type="text" name="textfield9" id="textfield9" style="width:80px" /></td>
    </tr>
    <tr style="font-weight:bold" align="center">
      <td width="10%">KIMAP</td>
      <td width="10%">Sub Kimap</td>
      <td width="5%">Uraian</td>
      <td width="10%">Kondisi</td>
      <td width="5%">Pos Tarif</td>
      <td width="5%">Jumlah</td>
      <td width="5%">Satuan</td>
      <td width="5%">Perkiraan Nilai<br>US$</td>
      <td width="5%">Lokasi Pengguna</td>
      <td width="5%">Tujuan Penggunaan</td>
      <td width="5%">Keterangan</td>
      <td width="10%">Jenis Kegiatan</td>
    </tr>
    <tr style="text-align:center">
      <td>J</td>
      <td><?php echo $data['sub_kimap'] ?></td>
      <td><textarea style="width:130px"><?php echo $data['uraian_sub'] ?></textarea></td>
      <td><?php echo $data['kondisi'] ?></td>
      <td><?php echo $data['pos_tarif'] ?></td>
      <td><?php echo $data['jumlah'] ?></td>
      <td><?php echo $data['satuan'] ?></td>
      <td><?php echo $data['perkiraan_nilai'] ?></td>
      <td><?php echo $data['lokasi_user'] ?></td>
      <td><?php echo $data['tujuan_penggunaan'] ?></td>
      <td><?php echo $data['ket'] ?></td>
      <td>
      <select name="select5" id="select5">
      	<option>Pilih</option>
        <option>Explorasi</option>
        <option selected="selected">Exploitasi</option>
      </select>
      </td>
    </tr>
   <tr>
      <td><label for="select"></label>
        <select name="select" id="select">
      </select></td>
      <td><select name="select4" id="select4">
      </select></td>
      <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="8" /></td>
      <td><label for="select2"></label>
        <select name="select2" id="select2">
      </select></td>
      <td><label for="textfield2"></label>
      <input name="textfield2" type="text" id="textfield2" size="8" /></td>
      <td><label for="textfield3"></label>
      <input name="textfield3" type="text" style="width:40px" id="textfield3" size="8" /></td>
      <td><label for="textfield4"></label>
      <input name="textfield4" type="text" id="textfield4" style="width:40px" size="8" /></td>
      <td><label for="textfield5"></label>
      <input name="textfield5" type="text" id="textfield5" size="8" /></td>
      <td><label for="textfield6"></label>
      <input name="textfield6" type="text" id="textfield6" size="8" /></td>
      <td><label for="textfield7"></label>
      <input name="textfield7" type="text" id="textfield7" size="8" /></td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" style="width:80px" id="textfield8" /></td>
      <td><select name="select6" id="select6">
      </select></td>
    </tr>
  </table>
  <p>
    
    <input type="button" onclick="location.href='index.php?m=pendaftaran1';" class="button" value="Langkah 1" />
    <input type="button" onclick="location.href='index.php?m=pendaftaran3';" class="button" value="Langkah 3" />
  </p>
</form>
</div>