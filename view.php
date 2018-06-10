<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
$sql = "SELECT * FROM stuinfo";
$result =mysql_query($sql);
 
    // output data of each row
    while($row = mysql_fetch_array($result)) {
        echo   $row[0]. " -   " . $row[1]. " " . $row[2]. " " . $row[3]. " " . $row[4]. "<br>";
    }
 

?>