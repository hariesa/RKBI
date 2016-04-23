<?php
include"config/config.php";
$tgl=date('d-M-Y');

//PRINT REGISTRASI==================================================
if($_REQUEST['p']=='printreg') {
echo"<script>window.print();</script>";
$kode_reg=$_REQUEST['id'];
?>
<img src="images/logo migas.jpg" width="100" height="100" style="margin-left:50px">
<div style="margin-top:80px;margin-left:50px">
<h1>Thank you have applied online for your material list</h1>
<?php
$sql=mysql_query("SELECT * FROM tb_reg_online WHERE kode_reg='$kode_reg'");
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
</div>
<?php
}


//PRINT REGISTRASI==================================================
if($_REQUEST['p']=='printloket') {
echo"<script>window.print();</script>";
$kode_reg=$_REQUEST['id'];

$sql=mysql_query("SELECT * FROM tb_reg_online WHERE kode_reg='$kode_reg'");
$data=mysql_fetch_array($sql);
?>


<img src="images/logo migas.jpg" width="100" height="100" style="margin-left:50px">
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
</div>
<?php
}

?>