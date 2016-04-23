<?php
include"config/config.php";

$tgl=date('d-M-Y');
?>

<style>
		  .button {
			  width: auto;
			  height:30px;
			  background:#09F;
			  border:0;
			  color:#FFF;
			  font-weight:bold;
			  border-radius:5px;
			  cursor:pointer;
			  text-decoration: none;
			  padding: 4px;
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
<h1>Registration Online has been check</h1>
<form id="form1" name="form1" method="post" action="">
  <table width="85%" border="1" cellspacing="2" cellpadding="2">
    <tr>
      <td width="20%">Registration Number Online</td>
      <td width="5%">:</td>
      <td width="75%"><label for="textfield"></label>
        <input type="text" name="textfield" value="<?php echo $data['kode_reg'] ?>" id="textfield" disabled /></td>
    </tr>
    <tr>
      <td>Date</td>
      <td>:</td>
      <td><input type="text" name="textfield3" value="<?php echo $tgl ?>" id="textfield3" disabled /></td>
    </tr>
    <tr>
      <td>Type of Registration</td>
      <td>:</td>
      <td><input type="text" name="textfield2" id="textfield2" value="<?php echo $data['form_type'] ?>" disabled /></td>
    </tr>
    <tr>
      <td>Reference Number</td>
      <td>:</td>
      <td><input type="text" name="textfield4" id="textfield4" value="<?php echo $data['reference_numb'] ?>" disabled /></td>
    </tr>
    <tr>
      <td>Date Reference Number</td>
      <td>:</td>
      <td><input type="text" name="textfield5" id="textfield5" value="<?php echo $tgl ?>" disabled /></td>
    </tr>
  </table>
</form>
<br>
<form id="form2" name="form2" method="post" action="print.php?p=printloket&id=<?php echo $data['kode_reg'] ?>">
  <input type="submit" name="button3" class="button" value="Print Tanda Terima" />
</form>
<br>
*) Form pada halaman ini sudah terisi otomatis by system

</div>