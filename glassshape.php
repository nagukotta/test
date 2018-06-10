<?php

$str = "unocoin";
 
$splt = str_split($str);
 
 
$mystr ='unocoin'."<br>";
for($i = count($splt); $i >= 0; $i--)
{
 
	if($i > 1){
	$rem = $i-2; 
	 //echo $rem."<br>";
	}
	 
	$a = IsPrime($rem);
	if ($a !=0 && $rem !=2)  
	{

		$spac = count($splt) - $rem;
		$arr = array_slice($splt, 0, $rem);
		if( count($arr) > 1)
		{
			$mystr .= str_repeat("&nbsp;",$spac).implode($arr)."<br>";
		}
		else
		{
			$mystr .=   str_repeat("&nbsp;", count($splt)-1).implode($arr);
		}
	   
	}

 
 
} 

 
 
$mystr2 ='';
for($x=2; $x <= count($splt); $x++)
{
	$rem2 = $x-1;  
	//echo $rem2."<br>";
	$a2 = IsPrime($rem2);
	if ($a2 ==0  || $rem2 == 2 )  
	{
		$spac = count($splt) - $rem2; 
		$arr = array_slice($splt, 0,  $x);
		$mystr2 .=  "<br>".str_repeat("&nbsp;",$spac).implode($arr);
	}
   
}
   
  
   echo $mystr.$mystr2;	
 //echo  $mystr2;

?>

 

<?php  
function IsPrime($n)  
{  
	for($x=2; $x<$n; $x++)  
	{  
		if($n %$x ==0)  
		{  
			return 0;  
		}  
	}  
	return 1;  
}  
$a = IsPrime(36);  

	if ($a==0)
	{
		echo 'This is not a Prime Number.....'."\n";  
	}
	else 
	{  
		echo 'This is a Prime Number..'."\n";  
	}
?> 
  
    
 