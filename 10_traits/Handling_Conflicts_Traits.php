<?php
// Multiple traits

// যেমনভাবে এক ক্লাস এ একি নামে দুই Method রাখা যায় না
// তেমনভাবে একি Method দুই  Trait  এ ব্যাবহার করা যায় না

trait one{
    public function test(){
      echo "Test method from trait one";
    }
}

trait  two{
   public function test(){
     echo "Test method from trait two";
   }
}

class abc {
  use one,two
  {
    two :: test insteadof one ;
    one :: test as Onetest ;

    // two :: test insteadof one ;
    // one :: test insteadof two;
  }
}

$obj = new abc;
$obj->Onetest();
// $obj->test();


 ?>
