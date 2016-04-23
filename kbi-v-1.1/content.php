<?php
session_start();
include"config/config.php";
$tgl=date('d-M-Y');
$bulan=date('M');
$tahun=date('Y');
?>
<script src='js/jquery-1.11.3.min.js'></script>
<script src='js/highchart.js'></script>


<?php
//HALAMAN BERANDA RKBI ONLINE
if($_GET['m']=='' || ($_GET['m']=='beranda'))
{
?>

<script>
	var chart1;
	$(document).ready(function() {
		chart1 = new Highcharts.Chart({
			chart: {
            	renderTo: 'chartang',
	            type: 'column'
    	    },   
        	title: {
            	text: 'Grafik Data Berkas RKBI <?php echo $bulan ?> <?php echo $tahun ?>'
	        },
    	    xAxis: {
        	    categories: ['']
	        },
    	    yAxis: {
        	    title: {
            	text: 'Jumlah Berkas yang masuk'
            }
        },
		series:                         
			[
			<?php
			$sql=mysql_query("SELECT * FROM tb_grafik_dummie WHERE kode_grafik='1'");
			if(mysql_num_rows($sql)>0) {
				while($data=mysql_fetch_array($sql)) {
			?>
					{
						name: '<?php echo $data['nama'] ?>',
						data: [<?php echo $data['jumlah'] ?>]
					},
			<?php
				}
			}
			?>
            ]
		});
	});	
</script>


	<div style="margin-top:60px;margin-left:40px;"><img src="images/welcome.png" width="212" height="212" /></div>
    <div style="font-size:18px;color:#06F;margin-left:50px">Welcome to Our System .. You log as <?php echo $user ?></div>
    <br><br>
	<div style="width:50%;height:10%;margin-left:100px;border:1px solid #CCC;margin-bottom:20px" id="chartang"></div>

<?php
}


//INPUT DATA KBH DAN KIMAP DAN GRUP KIMAP
if($_GET['m']=='input_data')
{
	include"kkks.php";
}

//INput KIMAP
if($_GET['m']=='kimap')
{
	include"kimap.php";
}

//INPUT KIMAP Grup
if($_GET['m']=='kimap_grup')
{
	include"kimap_grup.php";
}

//INPUT Sub Kontraktor
if($_GET['m']=='subkontrak')
{
	include"subkontraktor.php";
}


//PENDAFTARAN LANGKA 1
if($_GET['m']=='pendaftaran1')
{
	include"pendaftaran1.php";
}

//PENDAFTARAN LANGKA 2
if($_GET['m']=='pendaftaran2')
{
	include"pendaftaran2.php";
}


//PENDAFTARAN LANGKA 3
if($_GET['m']=='pendaftaran3')
{
	include"pendaftaran3.php";
}

//PENDAFTARAN LANGKA 4
if($_GET['m']=='pendaftaran4')
{
	include"pendaftaran4.php";
}

//LOKET PENERIMAAN FISIK
if($_GET['m']=='loket1')
{
	include"loket1.php";
}

//LOKET PENERIMAAN FISIK Langkah 2
if($_GET['m']=='loket2')
{
	include"loket2.php";
}

//Verifikasi
if($_GET['m']=='verifikasi1')
{
	include"verifikasi-1.php";
}

//Verifikasi
if($_GET['m']=='verifikasi2')
{
	include"verifikasi-2.php";
}

//Verifikasi
if($_GET['m']=='verifikasi3')
{
	include"verifikasi-3.php";
}
//Verifikasi
if($_GET['m']=='verifikasi4')
{
	include"verifikasi-4.php";
}

//Penandasahan
if($_GET['m']=='penandasahan')
{
	include"penandasahan.php";
}

//APPROVAL DIREKTUR 
if($_GET['m']=='acc_direktur')
{
	include"acc_direktur.php";
}

?>