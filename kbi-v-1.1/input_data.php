		
		<!-- Edit Below -->		
		
		<style type="text/css">
	      body, html {
	      }
	      
	      .tabs input[type=radio] {
	          position: absolute;
	          top: -9999px;
	          left: -9999px;
	      }
	      .tabs {
	        width: 90%;
	        float: none;
	        list-style: none;
	        position: relative;
	        padding: 0;
	        margin: 95px auto;
	      }
	      .tabs li{
	        float: left;
	      }
	      .tabs label {
	          display: block;
	          padding: 10px 20px;
	          border-radius: 2px 2px 0 0;
	          color: #08C;
	          font-size: 20px;
	          font-weight: normal;
	          font-family: 'Roboto', helveti;
	          background: rgba(255,255,255,0.2);
	          cursor: pointer;
	          position: relative;
	          top: 10px;
	          -webkit-transition: all 0.2s ease-in-out;
	          -moz-transition: all 0.2s ease-in-out;
	          -o-transition: all 0.2s ease-in-out;
	          transition: all 0.2s ease-in-out;
	      }
	      .tabs label:hover {
	        background: rgba(255,255,255,0.5);
	        top: 0;
	      }
	      
	      [id^=tab]:checked + label {
	        background: #08C;
	        color: white;
	        top: 0;
	      }
	      
	      [id^=tab]:checked ~ [id^=tab-content] {
	          display: block;
	      }
	      .tab-content{
	        display: none;
	        text-align: left;
	        width: 100%;
	        font-size: 11px;
	        line-height: 140%;
	        padding-top: 10px;
	        background: white;
	        padding: 15px;
	        color: black;
	        position: absolute;
	        top: 53px;
	        left: 0;
	        box-sizing: border-box;
	        -webkit-animation-duration: 0.5s;
	        -o-animation-duration: 0.5s;
	        -moz-animation-duration: 0.5s;
	        animation-duration: 0.5s;
	      }
		  .button {
			  width:80px;
			  height:30px;
			  background:#09F;
			  border:0;
			  color:#FFF;
			  font-weight:bold;
			  border-radius:5px;
			  cursor:pointer;
		  }
		  .button:hover {
			  color:#09F;
			  background:#fff;
			  border: 1px solid #09C;
		  }
	    </style>
	<body>
		<div class="container">
			<!-- Top Navi -->
			
			
		
			<div class="main">
	        	<ul class="tabs">
			        <li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label for="tab1">KKKS</label>
<div id="tab-content1" class="tab-content animated fadeIn">
<div>
<table border="1" style="text-align:center;">
	<tr height="40" style="font-weight:bold;">
    	<td width="40">No</td>
    	<td width="90">Kode KKKS</td>
    	<td width="220">Perusahaan</td>
    	<td width="290">Alamat</td>
    	<td width="130">Kontak</td>
    	<td width="100">Fax</td>
    	<td width="140">Nama Legal</td>
    	<td width="70">API</td>
    	<td width="80">Status</td>
    </tr>
	<tr height="40">
    	<td>1</td>
    	<td>112</td>
    	<td>Petronas Carigali RIMS - JOC LTD<br> <b>NPWP :</b> 70.052.275.8-413.000</td>
    	<td><b>Alamat Satu :</b> Jl. H.R. Rasuna Said Kav. B-10 <br><b>Alamat Dua :</b> Jl. Medan Merdeka Barat Kav. B-10</td>
    	<td>Bapak Fauzi <br> 08123456789 <br> (021)12345678</td>
    	<td>(021)12345678</td>
    	<td>Pertronas, Tbk</td>
    	<td>-</td>
    	<td>NEW</td>
    </tr>
</table>
<br>
Hal 1 dari 1
</div>                      
<br>
<div style="border:solid 1px;width:400px;padding-left:20px;padding-top:20px;margin-top:20px">
<b>
<table width="85%" border="0" cellspacing="2" cellpadding="2">
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
    <td colspan="2"><input type="submit" class="button" name="button" id="button" value="Simpan" /></td>
  </tr>
</table>
</b>
</div>
</div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2">KIMAP</label>
<div id="tab-content2" class="tab-content animated fadeIn">
<div>
<table border="1" style="text-align:center;">
	<tr height="40" style="font-weight:bold;">
    	<td width="40">No</td>
    	<td width="140">KIMAP</td>
    	<td width="140">KIMAP Grup</td>
    	<td width="500">Nama</td>
    </tr>
	<tr height="40">
    	<td>1</td>
    	<td>A-01</td>
    	<td>A</td>
    	<td>DRILLING MACHINERY, MUD EQUIPMENT & ACCESSORIES</td>
    </tr>
</table>
<br>
Hal 1 dari 1
</div>                      
<br>
<div style="border:solid 1px;width:400px;padding-left:20px;padding-top:20px;margin-top:20px">
<b>
<table width="85%" border="0" cellspacing="2" cellpadding="2">
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
    <td colspan="2"><input type="submit" class="button" name="button" id="button" value="Simpan" /></td>
  </tr>
</table>
</b>
</div>
</div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab3">
			          <label for="tab3">KIMAP GRUP</label>
<div id="tab-content3" class="tab-content animated fadeIn">
<div>
<table border="1" style="text-align:center;">
	<tr height="40" style="font-weight:bold;">
    	<td width="40">No</td>
    	<td width="140">KIMAP Grup</td>
    	<td width="400">Nama</td>
    </tr>
	<tr height="40">
    	<td>1</td>
    	<td>A</td>
    	<td>DRILLING AND PRODUCTION</td>
    </tr>
</table>
<br>
Hal 1 dari 1
</div>                      
<br>
<div style="border:solid 1px;width:400px;padding-left:20px;padding-top:20px;margin-top:20px">
<b>
<table width="85%" border="0" cellspacing="2" cellpadding="2">
  <tr height="50px">
    <td width="150px">KIMAP Grup</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td width="150px">Nama</td>
    <td>:  <input type="text" name="textfield16" id="textfield16" /></td>
  </tr>
  <tr height="50px">
    <td colspan="2"><input type="submit" class="button" name="button" id="button" value="Simpan" /></td>
  </tr>
</table>
</b>
</div>
</div>
			        </li>
                    
                    
                    
                    <li>
			          <input type="radio" name="tabs" id="tab4">
			          <label for="tab4">SubKontraktor</label>
			          <div id="tab-content3" class="tab-content animated fadeIn">
<div>
<table border="1" style="text-align:center;">
	<tr height="40" style="font-weight:bold;">
    	<td width="40">No</td>
    	<td width="220">Kode Sub-Kontraktor</td>
    	<td width="250">Nama Sub-Kontraktor</td>
    	<td width="180">NPWP</td>
    	<td width="300">Alamat</td>
    	<td width="100">Status</td>
    </tr>
	<tr height="40">
    	<td>1</td>
    	<td>100</td>
    	<td>HALLIBURTON INDONESIA, PT.</td>
        <td>01.061.563-105.6000</td>
        <td>Jl.Tanah Abang II No.81, Petojo Selatan <br> <b>Kota :</b> Jakarta Pusat <br> <b>Kode Pos :</b> 17628</td>
        <td>New</td>
    </tr>
</table>
<br>
Hal 1 dari 1
</div>                      
<br>
<div style="border:solid 1px;width:400px;padding-left:20px;padding-top:20px;margin-top:20px">
<b>
<table width="85%" border="0" cellspacing="2" cellpadding="2">
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
    <td colspan="2"><input type="submit" class="button" name="button" id="button" value="Simpan" /></td>
  </tr>
</table>
</div>
</div>
			        </li>
                    
			    </ul>
	      	</div>
		</div><!-- Container -->
	</body>
</html>