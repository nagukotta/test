<?php


$i =50;

function a($i){

$i = $i+100;
return $i;
}

//echo a($i);
?>

<?php
$a=array("red","green");
print_r(array_pad($a,5,"blue"));

   //Out Put : Array ( [0] => red [1] => green [2] => blue [3] => blue [4] => blue );
?>
