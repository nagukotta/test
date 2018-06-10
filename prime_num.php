<?php
error_reporting(E_ALL);
//Program to find prime numbers in between a range
 
 
 $num = 44;
 
 for($m =2; $m <= $num; $m++){
 
 for($n = 2; $n < $m; $n++){
 
   if($m % $n == 0){
      break;   
   }
 }
 
  if($m == $n){
   $prime[] = $n;
  }
 }
 
 echo "<pre>"; echo "prime numbers : ".implode(",", $prime);