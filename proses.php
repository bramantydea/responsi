<?php

	$nama = $_POST['nama'];
	$no = $_POST['no'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];

echo "<head><title>My Barber</title></head>";
$fp = fopen("form.txt","a+");
fputs($fp,"$nama|$no|$alamat|$jk\n");
fclose($fp);


?>


