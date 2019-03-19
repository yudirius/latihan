<?php
/*
$x = 8;  
$y = 4;

echo $x % $y;

*/$batas= 10000;
$prima=2;
$hasil_prima=2;
//pengulangan berdasarkan nilai input
$arr=array("2","3");
for($a=4;$a<$batas;$a++){
	$isprima=false;
	for($x=2;$x<$a;$x++){
		$hasil=$a%$x;
		if($hasil==0){
			$isprima=false;
			break;
		}
		$isprima=true;
	}
	if($isprima==true){
			array_push($arr, $a);
			}
}
print_r($arr);
?>