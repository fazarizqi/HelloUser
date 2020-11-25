<?php

// Kalkulator menggunakan swichcase

$angka1 = readline("Masukan Angka1: ");
$angka2 = readline("Masukan Angka2: ");
$option = readline("Masukan Kalkulasi: ");

if (is_numeric($angka1) && is_numeric($angka2)) {
	switch ($option) {
	case '+':
		$result = $angka1 + $angka2;
		break;
	case '-':
		$result = $angka1 - $angka2;
		break;
	case '*':
		$result = $angka1 * $angka2; 
		break;
	default:
			$result = "Kalkulasi Tidak terdefinisi";
		break;
}

}else{
		$result = "mesti angka" ;
}

echo $result;