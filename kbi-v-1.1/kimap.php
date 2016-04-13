<?php
include"config/config.php";
?>

<link rel="stylesheet" type="text/css" href="css/style.css" />

<ul class="menu2">
	<li class="menugaktif"><a href="index.php?m=input_data">KKKS</a></li>
    <li class="menuaktif"><a href="#">KIMAP</a></li>
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
    	<td width="140">KIMAP</td>
    	<td width="140">KIMAP Grup</td>
    	<td width="500">Nama</td>
    </tr>
    <?php
	$sql = mysql_query("select * from kimap order by KIMAP Limit 5");
	if(mysql_num_rows($sql)>0) {
		while($data=mysql_fetch_array($sql)) {
			?>
				<tr height="40">
                	<td><?php echo $data['KIMAP'] ?></td>
                	<td><?php echo $data['KIMAP_Grup'] ?></td>
                	<td><?php echo $data['Nama'] ?></td>
                </tr>
            <?php
		}
	}
	?>

	<tr height="40">
    	<td>A-01</td>
    	<td>A</td>
    	<td>DRILLING MACHINERY, MUD EQUIPMENT & ACCESSORIES</td>
    </tr>
</table>
<br>
Hal 1 dari 1
</div>                      
<br>
<div style="border:solid 1px;width:400px;margin-left:40px;padding-top:20px;margin-top:20px">
<b>
<table width="85%" border="0" cellspacing="2" cellpadding="2" style="margin-left:10px;">
  <tr height="50px">
    <td width="150px">KIMAP</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">KIMAP Grup</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Nama</td>
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

