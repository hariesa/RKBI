<?php
include"config/config.php";
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<ul class="menu2">
	<li class="menuaktif"><a href="#">KKKS</a></li>
    <li class="menugaktif"><a href="index.php?m=kimap">KIMAP</a></li>
    <li class="menugaktif"><a href="index.php?m=kimap_grup">KIMAP Grup</a></li>
    <li class="menugaktif"><a href="index.php?m=subkontrak">Sub Kontraktor</a></li>
</ul>
<br>
<br>
<br>
<br>
<div style="padding:40px;">
<table border="1" style="text-align:center;">
	<tr height="40" style="font-weight:bold;">
    	<td width="90">Kode KKKS</td>
    	<td width="220">Perusahaan</td>
    	<td width="290">Alamat</td>
    	<td width="130">Kontak</td>
    	<td width="100">Fax</td>
    	<td width="140">Nama Legal</td>
    	<td width="70">API</td>
    	<td width="80">Status</td>
    </tr>
    <?php
	$sql = mysql_query("select * from kkks order by Kode_KKKS Limit 5");
	if(mysql_num_rows($sql)>0) {
		while($data=mysql_fetch_array($sql)) {
			?>
				<tr height="40">
                	<td><?php echo $data['Kode_KKKS'] ?></td>
                	<td><?php echo $data['Nama_Perusahaan'] ?><br><b>NPWP :</b> <?php echo $data['NPWP'] ?></td>
                	<td><b>Alamat 1 :</b> <?php echo $data['Alamat1'] ?><br><b>Alamat 2 :</b> <?php echo $data['Alamat2'] ?></td>
                	<td><?php echo $data['Contact'] ?><br><b>Telp :</b> <?php echo $data['Telepon'] ?></td>
                	<td><?php echo $data['Fax'] ?></td>
                	<td><?php echo $data['namalegalised'] ?></td>
                	<td><?php echo $data['API'] ?></td>
                	<td><?php echo $data['Status'] ?></td>
                </tr>
            <?php
		}
	}
	?>
<!--	<tr height="40">
    	<td>112</td>
    	<td>Petronas Carigali RIMS - JOC LTD<br> <b>NPWP :</b> 70.052.275.8-413.000</td>
    	<td><b>Alamat Satu :</b> Jl. H.R. Rasuna Said Kav. B-10 <br><b>Alamat Dua :</b> Jl. Medan Merdeka Barat Kav. B-10</td>
    	<td>Bapak Fauzi <br> 08123456789 <br> (021)12345678</td>
    	<td>(021)12345678</td>
    	<td>Pertronas, Tbk</td>
    	<td>-</td>
    	<td>NEW</td>
    </tr>
--></table>
<br>
Hal 1 dari 1
<div style="float:right"></div>
</div>
<br>
<div style="border:solid 1px;width:400px;margin-left:40px;padding-top:20px;margin-top:20px">
<b>
<table width="85%" border="0" cellspacing="2" cellpadding="2" style="margin-left: 10px;">
  <tr height="50px">
    <td width="150px">Kode KKKS</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Nama Perusahaan</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">NPWP</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Alamat 1</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Alamat 2</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Kontak</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Telepon</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Fax</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Status</td>
    <td>:  <select name="select1"></select></td>
  </tr>
  <tr height="50px">
    <td width="150px">Nama Legal</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">API</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td><input type="submit" class="button" name="button" id="button" value="Simpan" /></td>
    <td><input type="button" class="delete" value="Hapus" /></td>
  </tr>
</table>
</b>
</div>

<br>

