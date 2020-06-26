<?php

//////////////////First Step//////////////////////////
// class ABC{
//   public $value= '$value property of ABC class';
// }
//
// class XYZ{
//   public $abc;
//
//   public function __construct(){
//
//     $this->abc = new ABC;
//   }
// }
//
// $xyz = new XYZ;
// echo $xyz->abc->value;
//super_object->sub_object->property
// var_dump($xyz);


//////////////////////Second Step/////////////////////////
class ABC{
  public function fun1()
  {
    echo "fun1 of ABC Class";
    return $this;
  }

  public function fun2()
  {
    echo "fun2 of ABC Class";
    // $this->fun1();
    return $this;
  }

  public function fun3()
  {
    echo "fun3 of ABC Class";
  }


}

$abc = new ABC;

// $abc->fun1();
// $abc->fun2();
// $abc->fun3();

// var_dump($abc->fun1());

$abc->fun1()->fun2()->fun3();
//Method Object এর উপর call হয়।
//$this যে জন্য ব্যাবহার হয়:- যে particular Object আমরা বানাই
//সেই object এর Property/Method কে refer করার জন্য।

 ?>
