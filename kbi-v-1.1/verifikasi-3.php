<?php
session_start();
include"config/config.php";
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<ul class="menu2">
	<li class="menugaktif"><a href="index.php?m=verifikasi1">Status Verifikasi</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi2">KIMAP</a></li>
    <li class="menuaktif"><a href="index.php?m=verifikasi3">Verifikasi</a></li>
    <li class="menugaktif"><a href="index.php?m=verifikasi4">Form 02 ML Penggolongan</a></li>
</ul>
<br>
<br>
<br>
<br>
<div style="padding:40px;">
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
      <td><input name="" type="checkbox" checked value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A2</td>
      <td>No &amp; Tgl RKBI/ML telah dicantumkan, distempel dan tandatangan asli</td>
      <td><input name="" type="checkbox" checked value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A3</td>
      <td>Urutan No Halaman sudah benar</td>
      <td><input name="" type="checkbox" checked value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A4</td>
      <td>Setiap lajur sudah disusun sesuai dengan KIMAP dan deskrpsinya</td>
      <td><input name="" type="checkbox" checked value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A5</td>
      <td>Jumlah satuan telah dibuat untuk setiap lajur</td>
      <td><input name="" type="checkbox" checked value=""></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A6</td>
      <td>Perkiraan Nilai dibuat untuk tiap lajur</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A7</td>
      <td>Lokasi penggunaan dibuat untuk setiap lajur</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A8</td>
      <td>Tujuan penggunaan dibuat untuk setiap lajur</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>A9</td>
      <td>Kolom Keterangan diisi asset capital, goods consumable good atau impor sementara</td>
      <td><input name="" type="checkbox" value="" checked></td>
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
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>B2</td>
      <td>No Kontrak dan berakhirnya kontrak (bila ada) berlaku</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>B3</td>
      <td><p>Berhak Mendapatkan fasilitas pembebasan (BM &amp; PDRI)</p>
      <p>- PMK 20 tahun 2005</p>
      <p>- PMK 27 tahun 2012</p></td>
      <td><input name="" type="checkbox" value="" checked></td>
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
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Pos tarif (HS Code) sudah ada dalam RKBI</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Kode KIMAP dan deskripsi telah sesuai</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>

      <td>4</td>
      <td>Jenis barang standard dan spesifikasi</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Pengajuan barang sesuai dengan dengan tujuan penggunaan</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Jumlah kebutuhan barang sudah sesuai</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Jumlah Nilai total telah benar</td>
      <td><input name="" type="checkbox" value="" checked></td>
      <td><input name="" type="checkbox" value=""></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Kolom keterangan telah diisi dengan lengkap</td>
      <td><input name="" type="checkbox" value="" checked></td>
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
      <textarea name="textarea" id="textarea" cols="110" rows="5">
      Aspek Legal:
      Dasar kontrak PSC/UU No. 8/1971 mendapatkan fasilitas BM dan PDRI tidak dipungut sesuai dengan PMK No. 20/2005.
      Pengajuan RKBI atas dasar dokumen pengadaannya berupa OA No. 4600004421 dengan PT. M-I Indonesia dan PI No. 025/PI-MI/I/DS/2016
      
      Aspek Teknis:
      Barang dalam RKBI merupakan Barang Bukan Sewa yang berupa Instrument-instrument part yang terdiri atas:
      EDC 95-11 Mineral Oil.
      Barang-barang tersebut akan digunakan untuk menggunakan EDC 95-11 sebagai bahan dasar dari NABM.
      
      Aspek Pemberdayaan:
      Berdasarkan Buku APDN barang dengan jenis, type dan spesifikasi tersebut belum dapat diproduksi di dalam negeri.
      </textarea></td>
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

</b>
</div>

<br>

