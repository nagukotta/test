<?php

$arr = array(7,1,9,8,2,7,2,8,4,9,1,11,-1,3);

//echo count($arr);

for($i=0; $i < count($arr); $i++){

 
 //$n = $i+1;
// echo $n;
 //echo  $arr[$n];
 //$total = $arr[$i]+$arr[$n];
   
   for($j =1; $j < count($arr); $j++){
		$total = $arr[$i]+$arr[$j];  
		if($total == 10){
			echo  $arr[$i].'+'.$arr[$j]." = 10 <br>";
		}
    }
}



 
?>