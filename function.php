<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "bus");

	
function query($sql) {
	global $conn;
	$result = mysqli_query($conn, $sql);

	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data) {

	global $conn;
	$namaL = htmlspecialchars($data["namaLengkap"]);
	$nik = htmlspecialchars($data["noIdentitas"]);
	$noHp = htmlspecialchars($data["noHP"]);
	$kelasPnp = htmlspecialchars($data["kp"]);
	$tglBerangkat = htmlspecialchars($data["jadwalKeberangkatan"]);
	$jmlPnp = htmlspecialchars($data["jumlahPenumpang"]);
	$jmlPnpLansia = htmlspecialchars($data["jumlahPenumpangLansia"]);
	$hargaTiket = htmlspecialchars($data["hargaTiket"]);
	$TotalBayar = htmlspecialchars($data["totalBayar"]);

	$sql = "INSERT INTO pesanan
				VALUES
			(null, '$namaL', '$nik', '$noHp', '$kelasPnp', '$tglBerangkat','$jmlPnp', '$jmlPnpLansia', '$TotalBayar', '$hargaTiket')";
	mysqli_query($conn, $sql);
	return mysqli_affected_rows($conn);
}