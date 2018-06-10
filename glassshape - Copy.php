<?php

$str = "unocoin";
 
$splt = str_split($str);
 
 
$mystr ='unocoin'."<br>";
for($i = count($splt); $i >= 0; $i--)
{
 
if($i > 1){
$rem = $i-2; 
 
}

$spac = count($splt) - $rem;
   $arr = array_slice($splt, 0, $rem);
   if( count($arr) > 1){
   
   $mystr .= str_repeat("&nbsp;",$spac).implode($arr)."<br>";
   }
   else
   {
    $mystr .=   str_repeat("&nbsp;", count($splt)).implode($arr);
   }
 
} 

 
 
$mystr2 ='';
for($x=2; $x <= count($splt); $x++)
{
	$rem2 = $x-1;  
	$spac = count($splt) - $rem2; 
	$arr = array_slice($splt, 0,  $x);
	if($x == 2){
	$mystr2 .=  "<br>".str_repeat("&nbsp;",$spac).implode($arr)."<br>";
	}
	else
	{
		$mystr2 .=  str_repeat("&nbsp;",$spac).implode($arr)."<br>";
	}
   
}
   
  
 echo $mystr.$mystr2;	

?>



<?php



  
    


?>