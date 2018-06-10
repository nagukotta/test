<?php 
 
 
		
        $size=13;
        $starStartPosition = 0;
        $starEndPosition = 13;
        $printout='';
        for($rows=0; $rows<$size; $rows++)
        {
            for( $cols=0; $cols<$size; $cols++)
            {
                if($cols < $starStartPosition || $cols >= $starEndPosition)
                {
                    $printout .= " "; 
                }
                else
                {
                    $printout .= "*";
                }
            }
            if($rows <6)
            {
                $starStartPosition++;
                $starEndPosition--;
            }
            else
            {
                $starStartPosition--;
                $starPosition++;
            }
            print_r($printout);
            $printout = "";
        }
    
 

?>