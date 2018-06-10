<?php
for($x=1;$x<=5;$x++)
{

    echo str_repeat("&nbsp;", 5-$x).str_repeat("* ", $x);
    echo "<br>";
}

for($y=4;$y>=1;$y--)
{

    echo  str_repeat("&nbsp;", 5-$y).str_repeat("* ", $y);
    echo "<br>";
}


for ($i = 0; $i < 30; $i++)
{
if ($i % 2 == 0)
{
echo $i.',';
echo "";
}

}
echo "<br>";

$array = array(1, 2, 3, 6, 12, 15, 18, 20, 21);

$number = 0;
foreach ($array as $value) {
// check for number evenly divisible by 3
if (($value % 3) == 0) {
$number = $value;
continue;
}
}
echo $number;
echo "";
?>

