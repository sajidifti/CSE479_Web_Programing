<?php

$file_one = [];
$file_two = [];


$open_one = fopen('file_one.txt', 'r');

while (!feof($open_one)) {
	$data = fgets($open_one, 1024);
    array_push($file_one , $data);
}

$open_two = fopen('file_two.txt', 'r');

while (!feof($open_two)) {
	$data = fgets($open_two, 1024);
    array_push($file_two , $data);
}


$common_items = 0 ;

for ($i=0 ; $i < sizeof($file_one) ; $i++){
    for($j=0 ; $j < sizeof($file_two) ; $j++){
        if( $file_one[$i] == $file_two[$j]){
            $common_items = $common_items + 1;
        }
    }
}

$total_items = sizeof($file_one) + ( sizeof($file_two) - $common_items );

$jaccard_value = $common_items / $total_items ;



echo "Jaccard Value is : " . $jaccard_value;


fclose($open_one);
fclose($open_two);


?>