<?php
include"config/config.php";
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<ul class="menu2">
	<li class="menugaktif"><a href="index.php?m=input_data">KKKS</a></li>
    <li class="menugaktif"><a href="index.php?m=kimap">KIMAP</a></li>
    <li class="menugaktif"><a href="index.php?m=kimap_grup">KIMAP Grup</a></li>
    <li class="menuaktif"><a href="#">Sub Kontraktor</a></li>
</ul>
<br>
<br>
<br>
<br>
<div style="padding:40px;">
<table border="1" style="text-align:center;">
	<tr height="40" style="font-weight:bold;">
    	<td width="220">Kode Sub-Kontraktor</td>
    	<td width="250">Nama Sub-Kontraktor</td>
    	<td width="180">NPWP</td>
    	<td width="300">Alamat</td>
    	<td width="100">Status</td>
    </tr>
    <?php
	$sql = mysql_query("select * from subkontraktor order by Kode_Subkontraktor Limit 5");
	if(mysql_num_rows($sql)>0) {
		while($data=mysql_fetch_array($sql)) {
			?>
				<tr height="40">
                	<td><?php echo $data['Kode_Subkontraktor'] ?></td>
                	<td><?php echo $data['Nama_Subkontraktor'] ?></td>
                	<td><?php echo $data['NPWP'] ?></td>
                	<td><?php echo $data['Alamat'] ?><br><b>Kota :</b> <?php echo $data['Kota'] ?><br><b>Kode Pos :</b> <?php echo $data['Kode_Pos'] ?></td>
                	<td><?php echo $data['Status'] ?></td>
                </tr>
            <?php
		}
	}
	?>
</table>
<br>
Hal 1 dari 1
</div>                      
<br>
<div style="border:solid 1px;width:400px;margin-left:40px;padding-top:20px;margin-top:20px">
<b>
<table width="85%" border="0" cellspacing="2" cellpadding="2" style="margin-left:10px;">
  <tr height="50px">
    <td width="150px">Kode Sub-Kontraktor</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Nama Sub-Kontraktor</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">NPWP</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Alamat</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Kode Pos</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Kota</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Status</td>
    <td>:  <select name="status-subkontrak"></select></td>
  </tr>
  <tr height="50px">
    <td><input type="submit" class="button" name="button" id="button" value="Simpan" /></td>
        <td><input type="button" class="delete" value="Hapus" /></td>

  </tr>
</table>
</b>
</div>

<br>

