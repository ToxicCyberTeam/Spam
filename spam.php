<?php
include 'bomtokped.php';

/*
    https://github.com/nee48/BomTelpSmsTokped
    Made by Handika Pratama
    Modified by まやちゃん
*/

$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 3x/Jam)
echo "Nomor Target (087***)\nInput : ";
$a = trim(fgets(STDIN));
echo "Pilih 1 Untuk SMS, Pilih 2 Untuk Call\nInput : ";
$b = trim(fgets(STDIN));
$init->type = "$b";
$init->no = "$a";

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
