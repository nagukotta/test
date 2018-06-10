<?php

mysql_connect("localhost", "root","");
mysql_select_db("test");


$sql = "select * from news";
$qur = mysql_query($sql);

 
 
 
 while($row = mysql_fetch_array($qur)) {
       
		
		 $sql2 = "select * from news_gallery  where news_id=".$row["id"];
		$qur2 = mysql_query($sql2);
		
		 while($row2 = mysql_fetch_array($qur2)) { 
		 
		     echo $row2["image"]."<br>";
		 }
		 echo $row["title"].'__________'.$row["description"];
    }
 
?>