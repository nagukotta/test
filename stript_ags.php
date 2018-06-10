<?php

$N =14;
function solution($N){
 
 $arr = array();
for($i=1; $i <= $N; $i++){

//echo $i."<br>";

//print_r(str_split($i)); echo "<br>";
$input = str_split($i);
for($j=0; $j < count($input); $j++){
    //  echo $input[$j]."<br>";
	  if($input[$j] == 1){ $arr[] = $input[$j]; }
}

}

echo count($arr);

}
//solution($N);



list($a, $b, $c) = array("apple", "ball", "cat", "dog");

echo $a."--".$b."--".$c;

?>

