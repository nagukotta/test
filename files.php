<?php

if(isset($_POST["sub"])){
echo "<pre>"; print_r($_FILES);
}
 
// split the phrase by any number of commas or space characters,
// which include " ", \r, \t, \n and \f
$keywords = preg_split("/[\s,@-]+/", "hypertext language, programming@hell-o");
//print_r($keywords);
echo "<br>";
//Array ( [0] => hypertext [1] => language [2] => programming [3] => hell [4] => o )
 
 
 
 
   $foods = array("pasta", "pteak", "fish", "potatoes");
   
   // find elements beginning with "p", followed by one or more letters.
   $p_foods = preg_grep("/p(\w+)/", $foods);
   
 //  print "Found food is " . $p_foods[0];
  // print "Found food is " . $p_foods[1];
 

 $str = "#101#,#211#,#321#,#433#,#541#";
              echo preg_replace("(#)", "", $str);

			  
?>

<form method="post"enctype="multipart/form-data" >

<input type="file" name="myfile">
<input type="submit" name="sub" value="Submit">
</form>

