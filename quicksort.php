<?php
echo '<pre>';	
	//$marks = array(Raj:{30,50,40},Simran:{50,70,50},Vinod:{40,40,30});
	$subjects = array('English', 'Maths', 'Science');
	$names = array('Raj','Simran', 'Vinod','Ravi');	
	$marks = array( 
            "Raj" => array (30,50,40),
			"Simran" => array (50,70,50),
			"Vinod" => array (40,40,30),
			"Ravi" => array (80,70,30)
         );
	
	$tot = 0;
	$arr = array();
	foreach($names as $name){
		//array_push($arr, $name);
		// echo print_r($marks[$name])."<br>";
		foreach($marks[$name] as $key=>$val){
		//echo $val."<br>";
			$tot = $val+$tot;
			//echo $tot."<br>";
			$arr[$name][] = $val;	
         // print_r($arr[$name])."<br>";			
		}
		$arr[$name][] = $tot;
		$tot = 0;
	}
	
	//echo print_r($arr);

	$cnt = count($subjects);
	sksort($arr, $cnt, false);
	
function sksort(&$array, $subkey="id", $sort_ascending=false) {
	
    if (count($array))
        $temp_array[key($array)] = array_shift($array);
	
    foreach($array as $key => $val){
		
        $offset = 0;
        $found = false;
        foreach($temp_array as $tmp_key => $tmp_val)
        {
			//echo $val[$subkey].'---'.$tmp_val[$subkey];
			//echo '<br>';
            if(!$found and strtolower($val[$subkey]) > strtolower($tmp_val[$subkey]))
            {
				
                $temp_array = array_merge( (array)array_slice($temp_array,0,$offset),
                                            array($key => $val),
                                            array_slice($temp_array,$offset)
                                          );
                $found = true;				
            }
            $offset++;
        }
        if(!$found) $temp_array = array_merge($temp_array, array($key => $val));
    }

    if ($sort_ascending) $array = array_reverse($temp_array);

    else $array = $temp_array;
}	

	$str = '<table border=1>';
	$str .= '<tr><td>Rank</td><td>Name</td>';
	foreach($subjects as $subject){
		$str .= '<td>'.$subject.'</td>';
	}
	$str .= '<td>Total</td></tr><tr>';
	
	$i =1;
	foreach($arr as $key=>$val){
		
		$str .='<td>'.$i.'</td><td>'.$key.'</td>';
		foreach($val as $vals){
			$str .= '<td>'.$vals.'</td>';
		}
		$str.='</tr>';
		$i++;
	}
	
	$str .= '</table>';
	echo $str;
	
?>
