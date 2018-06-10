<?php 

$A = array(5, 1, 1, 1, 2, 2, 4, 4, 4, 4, 4, 4, 7, 7, 11, 13, 18, 10, 90, 100, -20, 2, 1, 1, 5);
$k = 3;

$count_val = array_count_values($A);
arsort($count_val); 

$arr_keys = array_keys($count_val);

$arr_slice = array_slice($arr_keys, 0, $k);
foreach($arr_slice as $key=>$val)
{
  echo $val.' ';
}
  
	   
?>