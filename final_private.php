<?php
class Animal {
public function getName($arg) {
echo "This is the ".$arg." Class";
}
}

class cow extends Animal {

function animalname(){

$this->getName("monkey");
}
}


$obj = new cow();
//$obj->animalname();


 
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,0,3));

?>