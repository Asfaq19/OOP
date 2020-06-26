<?php
// This page is for Priority Checking.
  class   Base{
    public function abc()
    {
      echo "ABC method from Base class";
    }
  }

  trait Test{
    public function abc()
    {
      echo "ABC method from test trait.";
    }
  }

  class Child extends Base{
     use Test;

     public function abc()
     {
       echo "ABC method from child class";
     }
     //......... Itself>Trait>Child .............
  }

  $obj = new Child;
  $obj->abc();

 ?>
