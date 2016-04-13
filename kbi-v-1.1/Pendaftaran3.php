<style>
		  .button {
			  width:80px;
			  margin-right: 4px;
			  height:30px;
			  background:#09F;
			  border:0;
			  color:#FFF;
			  font-weight:bold;
			  border-radius:5px;
			  cursor:pointer;
			  text-decoration: none;
		  }
		  .button:hover {
			  color:#09F;
			  background:#fff;
			  border: 1px solid #09C;
		  }
</style>

<div style="margin-top:80px;margin-left:50px">
<h1>Upload Dokumen </h1>
<form id="form1" name="form1" method="post" action="">
  <table width="85%" border="1" cellspacing="2" cellpadding="2">
    <tr>
      <td width="4%">No</td>
      <td width="39%">Dokumen Pendukung</td>
      <td width="51%"><label for="fileField">Upload File</label></td>
    </tr>
    <tr>
      <td>1</td>
      <td>Form Tingkat Komponen Dalam Negeri</td>
      <td><input type="file" name="fileField" id="fileField" /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Dokumen Pengadaan/Kebutuhan</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>a. PO/PI/LOI/Invoice/MR</td>
      <td><input type="file" name="fileField2" id="fileField2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>b. as build drawing/layout</td>
      <td><input type="file" name="fileField3" id="fileField3" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>c. Program Schedule</td>
      <td><input type="file" name="fileField4" id="fileField4" /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Dokumen Keteknikan</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>a. Drawing/katalog</td>
      <td><input type="file" name="fileField5" id="fileField5" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>b. P&amp;ID</td>
      <td><input type="file" name="fileField6" id="fileField6" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>c. Hasil Kajian</td>
      <td><input type="file" name="fileField7" id="fileField7" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Untuk Pengajuan RKBI yang melibatkan subkon</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>a. hasil evaluasi Lelang</td>
      <td><input type="file" name="fileField8" id="fileField8" /></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Assistance Requisition Sheet</td>
      <td><input type="file" name="fileField9" id="fileField9" /></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Pembelian dan Penggunaan P2 Bahan Peledak dari Kepolisian</td>
      <td><input type="file" name="fileField10" id="fileField10" /></td>
    </tr>
  </table>
</form>
<p>
   
    <input type="button" onclick="location.href='index.php?m=pendaftaran2';" class="button" value="langkah 2" />
    <input type="button" onclick="location.href='index.php?m=pendaftaran4';" class="button" value="langkah 4" />
</p>
</div>