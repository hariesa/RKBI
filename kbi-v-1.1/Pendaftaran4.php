<?php
include"config/config.php";

$tgl=date('d-M-Y');
?>

<style>
		  .button {
			  width: auto;
			  height:30px;
			  background:#09F;
			  border: 1px solid #FFF;
			  padding: 6px;
			  color:#FFF;
			  font-weight:bold;
			  font-size:13px;
			  border-radius:5px;
			  cursor:pointer;
			  text-decoration: none;
			  margin-right: 7px;
		  }
		  .button:hover {
			  color:#09F;
			  background:#fff;
			  border: 1px solid #09C;
		  }
</style>
<div style="margin-top:80px;margin-left:50px">
<h1>Thank you have applied online for your material list</h1>
<?php
$sql=mysql_query("SELECT * FROM tb_reg_online");
$data=mysql_fetch_array($sql);
?>
<form id="form1" name="form1" method="post" action="">
  <table width="85%" border="1" cellspacing="2" cellpadding="2">
    <tr>
      <td width="20%">Registration Number Online</td>
      <td width="5%">:</td>
      <td width="75%"><label for="textfield"></label>
      <input type="text" value="<?php echo $data['kode_reg'] ?>" name="textfield" id="textfield" disabled /></td>
    </tr>
    <tr>
      <td>Date</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $tgl ?>" name="textfield3" id="textfield3" disabled /></td>
    </tr>
    <tr>
      <td>Type of Registration</td>
      <td>:</td>
      <td><input type="text" name="textfield2" value="<?php echo $data['form_type'] ?>" id="textfield2" disabled /></td>
    </tr>
  </table>
</form>
<br>
<form id="form2" name="form2" method="post" action="">
  <a href="#" class="button">Print RKBI Rekap</a>
  <a href="#" class="button">Print RKBI Detail</a>
  <a href="print.php?p=printreg&id=<?php echo $data['kode_reg'] ?>" class="button">Print Registration</a>
</form>
<p>&nbsp;</p>
<br>
*) Form pada halaman ini sudah terisi otomatis by system
</div>