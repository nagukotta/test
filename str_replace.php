<?php
$str ="This is a sentence";
  
$exp = explode(' ', $str);
    
$result = str_replace( array('i','a'), array('e','e',),  $str );

echo $result;

//input:  This is a sentence.
//output: Thes es e santanci.
?>