		

		<!-- Edit Below -->
		
		<style type="text/css">
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
	        z-index: 2;
	        display: none;
	        text-align: left;
	        width: 100%;
	        font-size: 12px;
	        line-height: 140%;
	        padding-top: 10px;
	        background: white;
	        padding: 10px;
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
			          <label for="tab1">Status Verfikasi</label>
			          <div id="tab-content1" class="tab-content animated fadeIn">
			            <table width="85%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>Refference Number</td>
    <td><input type="text" name="textfield16" id="textfield16" /></td>
    <td>&nbsp;</td>
    <td>Tanggal</td>
    <td><input type="text" name="textfield17" id="textfield17" /></td>
  </tr>
  <tr>
    <td colspan="5">Status Verifikasi</td>
  </tr>
  <tr>
    <td><input name="" type="radio" value="">Di verifikasi</td>
    <td><input name="" type="radio" value="">Di tolak</td>
    <td><input name="" type="radio" value="">Di terima</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="button" class="button" value="Simpan" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2">KIMAP</label>
			          <div id="tab-content2" class="tab-content animated fadeIn">
<table width="85%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td width="20%">Nomor RKBI/Masterlist</td>
    <td width="3%">:</td>
    <td width="26%"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    <td width="17%">Sub Kontraktor</td>
    <td width="6%">:</td>
    <td width="28%"><input type="text" name="textfield2" id="textfield2" /></td>
  </tr>
  <tr>
    <td>Tanggal RKBI/Masterlist</td>
    <td>:</td>
    <td><input type="text" name="textfield5" id="textfield5" /></td>
    <td>No Kontrak / tanggal</td>
    <td>:</td>
    <td><input type="text" name="textfield3" id="textfield3" /></td>
  </tr>
  <tr>
    <td valign="top">NPWP</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" name="textfield6" id="textfield6" />
      (By Login)</td>
    <td valign="top">Status Barang</td>
    <td valign="top">:</td>
    <td valign="top"><input name="textfield4" type="text" id="textfield4" value="Bukan Sewa" />
      (mengikuti form pendaftaran yang dipilih</td>
  </tr>
  <tr>
    <td>Kontraktor KPS/KKS</td>
    <td>:</td>
    <td><input type="text" name="textfield7" id="textfield7" />
      (By Login)</td>
    <td>KPBC Pemasukan</td>
    <td>:</td>
    <td><input name="textfield13" type="text" id="textfield13" value="Bukan Sewa" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="textfield8" id="textfield8" />
      (By Login)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dasar Kontrak KPS/KKS</td>
    <td>:</td>
    <td><input type="text" name="textfield9" id="textfield9" /></td>
    <td colspan="3">Kontak Korespondensi</td>
  </tr>
  <tr>
    <td>Tanggal Kontrak</td>
    <td>:</td>
    <td><input type="text" name="textfield10" id="textfield10" /></td>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="textfield14" id="textfield14" /></td>
  </tr>
  <tr>
    <td>Masa Berlaku</td>
    <td>:</td>
    <td><input type="text" name="textfield11" id="textfield11" /></td>
    <td>Email/HP</td>
    <td>:</td>
    <td><input type="text" name="textfield15" id="textfield15" /></td>
  </tr>
  <tr>
    <td>Daerah Operasi</td>
    <td>:</td>
    <td><input type="text" name="textfield12" id="textfield12" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
                        
       
<form id="form1" name="form1" method="post" action="">
   
  <table width="80%" border="1" cellspacing="2" cellpadding="2">
   
    <tr>
      <td width="10%">KIMAP</td>
      <td width="10%">Sub Kimap</td>
      <td width="21%">Uraian</td>
      <td width="10%">Kondisi</td>
      <td width="10%">Pos Tarif</td>
      <td width="7%">Jumlah</td>
      <td width="7%">Satuan</td>
      <td width="12%">Perkiraan Nilai</td>
      <td width="10%">Lokasi Pengguna</td>
      <td width="10%">Tujuan Penggunaan</td>
      <td width="5%">Keterangan</td>
      <td width="10%">Status barang</td>
      <td width="10%">Status Op</td>
      <td width="10%">PPN</td>
      <td width="10%">Jenis Kegiatan</td>
    </tr>
    <tr>
      <td><label for="select"></label>
        <select name="select" id="select">
      </select></td>
      <td><select name="select3" id="select3">
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
      <input name="textfield4" type="text" style="width:40px" id="textfield4" size="8" /></td>
      <td><label for="textfield5"></label>
      <input name="textfield5" type="text" id="textfield5" size="8" /></td>
      <td><label for="textfield6"></label>
      <input name="textfield6" type="text" id="textfield6" size="8" /></td>
      <td><label for="textfield7"></label>
      <input name="textfield7" type="text" id="textfield7" size="8" /></td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" style="width:80px" /></td>
      <td><select name="select7" id="select7">
      </select></td>
      <td><select name="select9" id="select9">
      </select></td>
      <td><input name="textfield12" type="text" id="textfield12" style="width:50px" size="8" /></td>
      <td><select name="select5" id="select5">
      </select></td>
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
      <input name="textfield3" type="text" id="textfield3" style="width:40px" size="8" /></td>
      <td><label for="textfield4"></label>
      <input name="textfield4" type="text" style="width:40px" id="textfield4" size="8" /></td>
      <td><label for="textfield5"></label>
      <input name="textfield5" type="text" id="textfield5" size="8" /></td>
      <td><label for="textfield6"></label>
      <input name="textfield6" type="text" id="textfield6" size="8" /></td>
      <td><label for="textfield7"></label>
      <input name="textfield7" type="text" id="textfield7" size="8" /></td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8"  style="width:80px" /></td>
      <td><select name="select8" id="select8">
      </select></td>
      <td><select name="select10" id="select10">
      </select></td>
      <td><input name="textfield15" type="text" style="width:50px" id="textfield15" size="8" /></td>
      <td><select name="select6" id="select6">
      </select></td>
    </tr>
  </table>
<!--  <p>
    <input type="submit" name="button2" id="button2" value="Langkah 1" />
    <input type="submit" name="button" id="button" value="Langkah 3" />
  </p>
--></form>
       
                        
                        
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab3">
			          <label for="tab3">Verifikasi</label>
			          <div id="tab-content3" class="tab-content animated fadeIn">
			            <form id="form1" name="form1" method="post" action="">
  <table width="45%" border="1" cellspacing="2" cellpadding="2">
    <tr>
      <td width="6%" rowspan="2">No</td>
      <td width="38%" rowspan="2">Uraian</td>
      <td colspan="2" align="center">Status</td>
    </tr>
    <tr style="text-align:center">
      <td width="4%">Ya</td>
      <td width="4%">Tidak</td>
    </tr>
    <tr>
      <td>I</td>
      <td>Umum, Administratif</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>A1</td>
      <td>Surat Pengajuan RKBI Sudah Benar, disertai dokumen pendukungnya</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A2</td>
      <td>No &amp; Tgl RKBI/ML telah dicantumkan, distempel dan tandatangan asli</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A3</td>
      <td>Urutan No Halaman sudah benar</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A4</td>
      <td>Setiap lajur sudah disusun sesuai dengan KIMAP dan deskrpsinya</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A5</td>
      <td>Jumlah satuan telah dibuat untuk setiap lajur</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A6</td>
      <td>Perkiraan Nilai dibuat untuk tiap lajur</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A7</td>
      <td>Lokasi penggunaan dibuat untuk setiap lajur</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A8</td>
      <td>Tujuan penggunaan dibuat untuk setiap lajur</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A9</td>
      <td>Kolom Keterangan diisi asset capital, goods consumable good atau impor sementara</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>II</td>
      <td>Legal</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>B1</td>
      <td>Perusahaan, Wilayah Kerja dan sub kontraktor (bila ada) ditulis dengan benar</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>B2</td>
      <td>No Kontrak dan berakhirnya kontrak (bila ada) berlaku</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>B3</td>
      <td><p>Berhak Mendapatkan fasilitas pembebasan (BM &amp; PDRI)</p>
      <p>- PMK 20 tahun 2005</p>
      <p>- PMK 27 tahun 2012</p></td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>III</td>
      <td>Teknis</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Status penggolongan barang sudah selesai</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Pos tarif (HS Code) sudah ada dalam RKBI</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Kode KIMAP dan deskripsi telah sesuai</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Jenis barang standard dan spesifikasi</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Pengajuan barang sesuai dengan dengan tujuan penggunaan</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Jumlah kebutuhan barang sudah sesuai</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Jumlah Nilai total telah benar</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Kolom keterangan telah diisi dengan lengkap</td>
      <td><input name="" type="checkbox" value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>IV</td>
      <td>Catatan Verifikator</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="110" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>V</td>
      <td colspan="3">Catatan Direktur DMB</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><textarea name="textarea2" id="textarea2" cols="110" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" class="button" value="Simpan" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

			          </div>
			        </li>
                    
                    
                    
                    <li>
			          <input type="radio" name="tabs" id="tab4">
			          <label for="tab4">Form 02 ML Penggolongan</label>
			          <div id="tab-content3" class="tab-content animated fadeIn">
			            
                        <table width="85%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td width="13%">KIMAP</td>
    <td width="18%">Uraian Barang</td>
    <td width="19%">Pengajuan KKKS</td>
    <td width="17%">Penilaian Konsultan</td>
    <td width="23%">Penilaian Migas</td>
  </tr>
  <tr>
    <td><select name="select" id="select">
    </select></td>
    <td><input name="textfield" type="text" id="textfield" size="8" /></td>
    <td><input name="textfield2" type="text" id="textfield2" size="8" /></td>
    <td><input name="textfield3" type="text" id="textfield3" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield4" size="8" /></td>
  </tr>
  <tr>
    <td><select name="select2" id="select2">
    </select></td>
    <td><input name="textfield4" type="text" id="textfield5" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield6" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield7" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield8" size="8" /></td>
  </tr>
  <tr>
    <td><select name="select2" id="select3">
    </select></td>
    <td><input name="textfield4" type="text" id="textfield9" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield10" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield11" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield12" size="8" /></td>
  </tr>
  <tr>
    <td><select name="select2" id="select4">
    </select></td>
    <td><input name="textfield4" type="text" id="textfield13" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield14" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield15" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield16" size="8" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Total</td>
    <td>&nbsp;</td>
    <td><input name="textfield4" type="text" id="textfield14" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield15" size="8" /></td>
    <td><input name="textfield4" type="text" id="textfield16" size="8" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<input type="submit" name="button" class="button" value="Simpan">
<br><br>
*) Form pada halaman ini sudah terisi otomatis by system
			          </div>
			        </li>
                    
			    </ul>
	      	</div>
		</div><!-- Container -->
	</body>
</html>