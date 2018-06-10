<?php
 
$cars = array
  (
  array("name"=>"raj","english"=>80,"sceince"=>90, "maths"=>100),
  array("name"=>"sekhar","english"=>88,"sceince"=>79, "maths"=>98),
  array("name"=>"Vamsi","english"=>99,"sceince"=>100, "maths"=>99)
  
  );

  
//echo "<pre>";  print_r($cars);

  echo "<table><tr><td>Name</td> <td>english</td> <td>sceince</td> <td>maths</td><tr>";
for ($row = 0; $row < count($cars); $row++) {
 
  echo "<pre>";
  //array_shift($cars[$row]);
  //echo array_sum(array_values($cars[$row]));
   echo "<tr>";
  foreach($cars[$row] as $k=>$v) {
    echo "<td>".$v."</td>";
  }
  echo "</tr>";
  
}
echo "</table>";

 

   $unsorted = array(2,4,5,63,4,5,63,2,4,43);
 
    function quicksort($array)
    {
        if (count($array) == 0)
            return array();
 
        $pivot = $array[0]; //echo  $pivot; die;
        $left = array();
		$right = array();
 
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $pivot)
                $left[] = $array[$i];
            else
                $right[] = $array[$i];
        }
              return $right; die;
        return array_merge(quicksort($left), array($pivot), quicksort($right));
    }
 
    $sorted = quicksort($unsorted);
 
    print_r($sorted);
?>