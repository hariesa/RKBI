<?php
include "config/config.php";
$tgl=date('d-M-Y');
$sql=mysql_query("SELECT * FROM tb_reg_online");
$data=mysql_fetch_array($sql);

$sql1=mysql_query("SELECT nama_kks FROM tb_rkbi_dummie WHERE id_kks='1'");
$data1=mysql_fetch_array($sql1);
?>

<link rel="alternate stylesheet" type="text/css" href="css/style.css" />
<div style="margin-top:80px;margin-left:50px">
<h1>List Registration</h1>
<table width="85%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="22%"><b>Registration Number Online</b></td>
    <td width="5%">:</td>
    <td width="73%"><label for="textfield"></label>
    <input type="text" value="<?php echo $data['kode_reg'] ?>" name="textfield" class="m-form" id="textfield" />
    (Masukkan RNO, data lain akan tampil otomatis)</td>
  </tr>
  <tr>
    <td><b>Tanggal Registrasi Online</b></td>
    <td>:</td>
    <td><?php echo $tgl ?></td>
  </tr>
  <tr>	
    <td><b>Nama Perusahaan</b></td>
    <td>:</td>
    <td><?php echo $data1['nama_kks'] ?></td>
  </tr>
  <tr>
    <td><b>No Surat</b></td>
    <td>:</td>
    <td><?php echo $data['no_surat'] ?></td>
  </tr>
  <tr>
    <td><b>Tanggal Surat</b></td>
    <td>:</td>
    <td><?php echo $data['tgl_surat'] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="85%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td width="6%" rowspan="2">No</td>
    <td colspan="2" rowspan="2">Uraian</td>
    <td style="text-align:center" colspan="2">Status Manual</td>
    <td style="text-align:center" width="16%" rowspan="2">Keterangan</td>
  </tr>
  <tr style="text-align:center">
    <td width="9%">Ada</td>
    <td width="9%">Tidak</td>
  </tr>
  <tr>
    <td rowspan="4">1</td>
    <td colspan="7">Administrasi</td>
  </tr>
  <tr>
    <td width="3%">a</td>
    <td width="46%">Penyampaian harus K3S atau yang dikuasakan dengan surat Kuasa</td>
    <td align="center"><input type="checkbox" name="box" id="radio3" /></td>
    <td align="center"><input type="radio" name="radio" id="radio4" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>b</td>
    <td>Surat Pengantar pengajuan RKBI ditandatangani oleh VP/GM</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>c</td>
    <td>Surat rekomendasi SKK Migas (dapat dilampirkan tanda terima Surat Pengajuan Rekomendasi SKK Migas, jika pengajuan rekomendasi tersebut sudah lebih dari 5 (hari) kerja</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="7">RKBI/Masterlist Sebanyak Satu Set Asli yang terdiri dari halaman :</td>
  </tr>
  <tr>
    <td>2</td>
    <td>a</td>
    <td>Rekapitulasi Rencana Kebutuhan Barang Impor</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>b.</td>
    <td>Rencana Kebutuhan Barang Impor</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>c.</td>
    <td>Header Rekapitulasi RKBI</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>d.</td>
    <td>Tabel Rekapitulasi</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>e.</td>
    <td>Setiap halaman RKBI/Masterlist ditandatangani oleh orang yang berwenang, nama dan jabatan harus dicantumkan</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>f.</td>
    <td>Format RKBI/Masterlist sudah sesuai dengan format RKBI/masterlist yang berlaku</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="9" valign="top">g.</td>
    <td>Header</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- Nomor dan Tanggal RKBI/masterlist</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- NPWP</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- Nama KKKS</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- Alamat</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio6" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- Dasar kontrak KKKS</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- Masa berlaku kontrak</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- Daerah Operasi (WK)</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>- Nama Subkontraktor</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- No. kontrak/tanggal</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio6" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Jangka Waktu kontrak</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio6" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Status Barang</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- KPBC Pemasukan</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- No API</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>h.</td>
    <td colspan="6">Terhadap RKBI/Masterlist yang diajukan setelah dilakukan pengadaan dan melibatkan sub kontraktor maka pada header harus ada</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Nama Subkontraktor</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Nomor kontrak/LOI</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Tanggal kontrak/LOI</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Jangka Waktu kontrak</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>i</td>
    <td>Tabel</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- KIMAP</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Uraian barang</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Kondisi</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Pos tarif</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Jumlah</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Satuan, Rinci (Joint/Feet/Meter/Box)</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Perkiraan nilai nominal</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Lokasi Penggunaan</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio6" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Tujuan Penggunaan</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Keterangan</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3</td>
    <td colspan="7">Dokumen Pendukung</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>a</td>
    <td>Form tingkat komponen dalam negeri (SC 012A/dll) untuk pengadaan barang yang melalui proses lelang</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>b</td>
    <td>Dokumen Pengadaan/Kebutuhan</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- PO/PI/LOI/Invoice/MR</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- as build drawing/layout (untuk kontruksi)</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio6" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- P&amp;ID</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Program Schedule</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Hasil Kajian</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio6" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>c</td>
    <td>Dokumen keteknikan</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Drawing/Katalog</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- P &amp; ID</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Hasil Kajian</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>d</td>
    <td colspan="6">Untuk pengajuan RKBI/masterlist yang melibatkan sub kontraktor, maka diperlukan dokumen</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Kontrak lengkap(dalam bentuk CD)</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>- Hasil evaluasi lelang/bid summary</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>e</td>
    <td>Assisstance requisition sheet</td>
    <td align="center"><input type="radio" name="radio" id="radio5" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>f</td>
    <td>Pembelian dan penggunaan (P2) Bahan Peledak dari kepolisian</td>
    <td align="center"><input type="radio" name="radio" id="radio7" value="radio" /></td>
    <td align="center"><input type="radio" name="radio" id="radio8" value="radio" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
  
  <input type="button" onclick="location.href='index.php?m=loket2';" class="button" value="Simpan" />
</p>
</div>