<?php

trait abc{
  private function xyz()
  //Fatal error: Uncaught Error: Call to
  //private method test::xyz() from context
  //Changing Access Levels in Traits....................
  {

    echo "XYZ function from trait abc";
  }
}

class test{
  use abc
  {
    abc::xyz as public;
    // abc::xyz as public abcxyz ;
    //with or without name
    //Can be public,protected,private
  }
}

$obj = new test;
// $obj->abcxyz();
$obj->xyz();

 ?>
