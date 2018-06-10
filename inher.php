<?php

//class QA extends Employee implements reportBug { }

interface  test{

function fb();

}

interface  test2 extends test{

function fb();

}

abstract class abcd
{
      function f1(){ echo "hello"; }
   // abstract function f11($name , $address){ echo "byeee"; }
}

abstract class abc extends abcd
{
      function f1(){ echo "hii"; }
   // abstract function f11($name , $address){ echo "byeee"; }
}


class xyz extends abc implements   test2
 {
  function f11($name , $address)
{
echo "$name , $address";
}

function fb(){
echo "face book";
}

function fb2(){
echo "face book";
}

 

}
$a = new xyz();


echo $a->f1();

echo $a->f11("nag","raj");
?>