
<?php
// generate card pins
function generate($length){
	$result = '';
	for ($i = 0; $i < $length; $i++){
		$result.=mt_rand(1,9);
	}
	return $result;
}
// send response headers to the browser
// header( 'Content-Type: text/csv' );
// header( 'Content-Disposition: attachment;filename='.$filename);

// save generated pins into a csv file
$file = fopen("cards.csv", "w");

for ($i = 1; $i <= 60000; $i++){
	// $serial = '105019082'; //this line should be edited when generating new serial range 
	// $pin = generate(12);
	// $denomation = '050';
	$raw = [];
	// $data = $serial. str_pad($i, 7, '0', STR_PAD_LEFT) .',' .generate(12).','.'050';
	$data = generate(12);
	$post = array_push($raw, $data);// echo sprintf("%s",  $serial) . "\r\n" ."<br>";
	fputcsv($file, $raw);
}



fclose($file);