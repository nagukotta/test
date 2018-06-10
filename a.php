<?php

$arr = array(9,8,7,6,5,4,3,2,1);
$count = count($arr);
for($n =0; $n <= $count; $n++)
{

  $str ='';

for($j=0; $j < $n; $j++)
{
	 $str .= ' '.$arr[$j];
  }  

$reverse_string = strrev($str)." <br>";
echo $reverse_string;
}

?>

