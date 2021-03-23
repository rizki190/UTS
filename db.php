<html>
<head>
<title>Data Pasien Virus Covid-19</title>
</head>
<body>

<?php
$provinsi = $_POST['wilayah'];
$nama = $_POST['nama_opr'];
$nim = $_POST['nim'];
$positif = $_POST['jmlpositif'];
$rawat = $_POST['jmldirawat'];
$sembuh = $_POST['jmlsembuh'];
$meninggal = $_POST['jmlmeninggal'];

switch ($provinsi) {
	case "jakarta":
	$prov = "DKI Jakarta";
	break;
	
	case "jabar":
	$prov = "Jawa Barat";
	break;
	
	case "banten":
	$prov = "Banten";
	break;
	
	case "jateng":
	$prov = "Jawa Tengah";
	break;
}

function tgl ($tanggal) {
	$bulan = array (
	1 => 'Januari',
	'Februari',
	'Maret',
	'April',
	'Mei',
	'Juni',
	'Juli',
	'Agustus',
	'September',
	'Oktober',
	'November',
	'Desember'
	);
	$tanda = explode('-', $tanggal);
	return $tanda[2] . ' ' . $bulan[(int)$tanda[1] ] . ' ' . $tanda[0];
}

date_default_timezone_set('Asia/Jakarta');
$jam = date("H:i:s");
?>

<center>
<td>

<?php
echo "Data Pemantauan Covid 19 wilayah $prov<br>";
echo "Per " . tgl(date('Y-m-d'));
echo " ".$jam."<br>";
echo "$nama / $nim";
?>

</td>
<tr><br></tr>
<tr><br></tr>
<table  width = "50%" height = "15%" border = "1" cellspacing = "0" cellpadding = "10">
<tr>
<td>Positif</td>
<td>Dirawat</td>
<td>Sembuh</td>
<td>Meninggal</td>
</tr>

<tr>
<td><?php echo $positif; ?></td>
<td><?php echo $rawat; ?></td>
<td><?php echo $sembuh; ?></td>
<td><?php echo $meninggal; ?></td>
</tr>
</table>
</center>
</body>
</html>