<?php

$angka1 = readline("Masukan Angka1: ");
$angka2 = readline("Masukan Angka2: ");
$option = readline("Masukan Kalkulasi: ");

if (is_numeric($angka1) && is_numeric($angka2)) {
	if ($option == "+"){
		$result = $angka1 + $angka2;

	}else if($option == "-"){
		$result = $angka1 - $angka2;

	}else if($option == "*"){
		$result = $angka1 * $angka2;

	}
}else{
	$result = "mesti angka";
}
echo $result;
