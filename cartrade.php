<?php

$arr = array("cartrade" => "https://www.cartrade.com", "carwale" => "https://www.carwale.com");

$text = "We acquired CarWale because they were very good in the new car category while CarTrade is leading in the used car platform.";

$new_arr = array();

foreach($arr as $key=>$val){

	$new_arr[$key] =  "<a href='".$val."'>".$key."<a>";
 
}

//echo str_ireplace(array_keys($new_arr), array_values($new_arr), $text);


     $str = "#101#,#211#,#321#,#433#,#541#";
$numbers = preg_replace("(#)", "", $str);
//echo array_sum(explode(',' ,  $numbers));
/*
 

$array = array(  10, -10, 10, -10 );
 
	$elements = array_count_values($array);
	if(count($elements)==1)
	{
		echo "Square";
	}
	else if(count($elements)==2)
	{
		echo "Rectangle";
	}
	else
	{
		echo "Polygon";
	}
 
 
 $array = array(50 , -25, 5 , -5 , 30, -120, 60 , 5, 10 );
  
	for($i=0;$i<count($array);$i++)
	{
		if($i==0){
		$order = $array[0];
		}
		else
		{
		$order = $order + $array[$i];
		}
		
		if($i!=0){
			echo ', '.$order;
		}
		else
		{
			echo $order;
		}
	}
 
 
 	
		 $years = array(2017, 2016, 2015);
		
		for($i =0; $i<count($years); $i++){
		
if( (0 == $years[$i] % 4) and (0 !=$years[$i] % 100) or (0 ==$years[$i] % 400) )
			{
				echo  '29 '; //"$years[$i]  = 29 (leap year)<br>";  
			}
			else
			{
				echo '28 '; //"$years[$i] = 28 (not leap year)<br>";  
			}
		
		}

	 
  


$text = "We acquired CarWale because they were very good in the new car category while CarTrade is leading in the used car platform";

 
$split = explode(" ", $text);
$n = 5;

$first_N_words = implode(" ", array_splice($split, 0, $n));

echo $first_N_words;

8. Write a php program to print following triangle order:
9
8 9 
7 8 9
6 7 8 9
5 6 7 8 9 
4 5 6 7 8 9
3 4 5 6 7 8 9
2 3 4 5 6 7 8 9
1 2 3 4 5 6 7 8 9





$arr = array(9,8,7,6,5,4,3,2,1);

for($i =0; $i <= count($arr); $i++){

  $str ='';
  for($j=0; $j < $i; $j++){
    $str .= ' '.$arr[$j];
  }  
  echo strrev($str)." <br>";
}*/

//reg1 = @"^[a-z]{2}[0-9]{2}[a-z]{1,2}[0-9]{4}$";

//^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$
//AP-05-BJ-9353 AP-05-BJ-9353
//TN-35-AB-638
//MH-03-C-3843

//^[A-Z]{2}([ \-])[0-9]{2}[ ,][A-Z0-9]{1,2}[A-Z]\1[0-9]{4}$
//(([A-Z]){2}(|-)(?:[0-9]){2}(|-)(?:[A-Z]){1,2}(|-)([0-9]){3,4})

if (!preg_match("/^(([A-Z]){2}(|-)(?:[0-9]){2}(|-)(?:[A-Z]){1,2}(|-)([0-9]){3,4})*$/", "AP-05-BA-9353")) {
 // echo "Pattern not matched"; 
}else{
  // echo "Pattern  matched"; 
}


?>



<?php
 
if( (0 == $years[$i] % 4) and (0 !=$years[$i] % 100) or (0 ==$years[$i] % 400) )
{
	//echo  '29 ';  // leap year   
}


//echo 2016 % 4;


 
print_r(array_count_values(array(  10, -10, 10, -10 ))); 
//echo date('d.m.Y',strtotime("-1 day"));

?>
