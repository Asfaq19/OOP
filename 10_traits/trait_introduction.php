<?php
//Inheritence works vertically..........
//traits works horizontally
//Traits দিয়ে আমরা যেখানে যে ক্লাস/ফাংশন দরকার সেখানে শুধু মাত্র সেটাই ব্যাবহার করতে পারি
/* inheritence এ একটি class শুধু একটি parent class কেই extend করতে পারে
 কিন্তু  traits ব্যাবহার করে আমরা multiple class extend করতে পারি */


  class abc{

    public function test()
    {
      echo "Test from class ABC";

    }

    public function test2()
    {
      echo "test2 method of test trait";
    }

  }


  class def{

    public function test3()
    {
      echo "Test from class DEF";

    }

    public function test4()
    {
      echo "test2 method of test trait";
    }

  }



  trait test{
    public function test2()
    {
      echo "test2 method of test trait";
    }
  }

  trait test2{
    public function test3()
    {
      echo "test3 method of test2 trait";
    }
  }


  class one extends abc
  {
    use test,test2;
    // use test;

  }

  class two extends abc
  {
     use test,test2;
     // use test;
    // ekhane sudhu class 2 aar 3 tei use hocche.sobgulo class e no.etai "trait".

  }
  class three extends abc
  {

  }

  class four extends abc
  {

  }

  class five extends abc
  {

  }

  $obj = new two;
  // $obj = new one;
  $obj->test3();

 ?>
