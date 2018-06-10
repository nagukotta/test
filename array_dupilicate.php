<?php
ini_set("display_errors", 0);
$array=array(1,2,3,4,4,5,3,5,6,8,9,8);

$count = count($array);

for($i =0; $i <= $count; $i++){

$n = $i+1;

  for($j =$n; $j <= $count; $j++){
  
    if($array[$i] === $array[$j]){
	   unset($array[$i]);
	}
  }
}

print_r($array);
?>