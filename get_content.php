<?php
$str = file_get_contents("pg1661.txt");

$pg_url = preg_replace("/[^a-zA-Z 0-9]+/", " ", $str);

//echo $pg_url;
echo "<pre>"; 
//echo $str;

$explode = explode(" ", $pg_url);

foreach($explode as $key=>$value)
{
    if(is_null($key) || $key == ''){
        unset($explode[$key]);
		}
}

  
 $arr_val_count = array_count_values($explode);
 ksort($arr_val_count);
 
 
 foreach($arr_val_count as $key=>$value)
{
  echo $key." (".$value.")<br>";
}
 
?>