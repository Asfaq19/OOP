<?php

// Interface
// same as abstract class
// Define method,Not implement
//php তে "inheritence" এ একটাই class  extend করা যায়.
//"C++" e multiple class k inherit kora jay.
//Interface এ multiple interface কে implement করা যায়.
//----------------------------------------------------------

/*

// abstract vs interface
1.abstract class  একটাই class extend করা যায় "কিন্তু" interface এ multiple class implement করা যায়.
2. Abstract class এ variable declare করা যায়,"কিন্ত" interface e variable declare করা যায় না.
3. Constructor function ও declare করা যায় না।

//Others from geekyshows
1. An abstract class can have only abstract methods or only non-abstract methods or both,
   but all methods of an interface are abstract by default.
2. An abstract class can declare properties/methods with access specifier,but interface can
   declare only constant properties(no other type properties) and methods are by default Abstract
   and public.
3.A class can inherit only one abstract class and multiple inheritence is not possible for abstract class
   but a class can implement more than one interface and can achieve multiple inheritence.
4.If a class contains even a single abstract method that class must be declared as abstract.
5.In an abstract class ,you can define as well as it's body methods but in the interface you can only define your methods.

*/


/*
//Rules:
1.Interface don't have instance variables.
2.All methods of an interface is abstract.
3.All methods of an interface are by default(auto) public.
4.Can't use private/protected specifiers when declaring a member.
5.We can not create object of interface.
6.More than one interface can  be implemented in a single class.
7.A class implements an interface using implements keyword.
8.If a class is implementing an interface it has to define all the methods given in that interface.
9.If a class does not implement all the methods declared in the interface,the class must be declared abstract.
10.The method signature for the method in the class must match the method signature as it appears in the interface.
11.Any class can use an interface's constants from the name of the interface like Test::roll
12.Classes that implement an interface can treat the constants as they were inherited.
13.An interface can extend(inherit) an interface.
14.One interface can inherit another interface using extends keywords.
15.An interface can not extends classes.


*/

//////////////////// Abstract/Interface ////////////////////////////////////////////

// abstract class def{
//   public $data;//Here is possible.But not in interface.
//   // private function test1()
//   public function test1()
//   {
//     echo 'test1';
//   }
// }
//
//
//   interface a{
//     // public $data;//Fatal error: Interfaces may not include member variables
//     // variables or data memebers declare করা যায় না।
//
//
//   /*
//     শুধু মাত্র public function ই declare করা যাবে।
//     private declare কর যায় না
//   */
//     public function test1(){
//       //Fatal error: Access type for interface method a::test() must be omitted
//       //Fatal error: Interface function a::test1() cannot contain body in....
//       echo 'test1';
//     }
//
//     // public function abc();//Only public function can be declared.Not Defined.
//      // private function test2(); //interface এ private function declare করা যায় না।
//       public function test2();
// }
//
//
//
// interface b{
//   public function xyz();
//
//
// }
//
// class c implements a,b{
//    public function abc()
//    {
//      echo "abc";
//    }
//    public function xyz()
//    {
//      echo "xyz";
//    }
//    public function test2()
//    {
//      echo "test2";
//    }
// }


////////////////////// Interface /////////////////////////////////////////
// interface abc{
//   public function test();
//   public function xyz();
// }
//
// class def implements abc {
//
//   //যে class টি interface abc কে implement করবে তার মধ্যে  ঐ ২টি function অবশ্যই থাকতে হবে।
//   //এখানে ওই ২টা ফাংশন implement হতে হবে
//   //Multiple class extend করা যায় না।
//
//     public function test(){
//       echo "test function";
//     }
//
//       public function xyz(){
//         echo "xyz function";
//       }
// }

////////////////////// Extend  ///////////////////////////////
  // class a{
  //
  // }
  //
  // class b{
  //
  // }
  //
  // class c extends a{
  //   //Not possible to extend multiple classes.
  //   //class c extends a,b .....wrong
  // }

  /////////////// Interface from geeky Shows  ////////////////////////////

    // interface Father
    // {
    // //  public $a;//Fatal error: Interfaces may not include member variables
    // const a = 10;//Value must be initialized
    //
    //  public function disp();//can't contain body and also public
    //
    // }

  ////////////// Extend Interface  ////////////////////////////////////////

        // interface Father {
        //       const a = 10;
        //       public function disp();
        //    }
        //
        // interface Son extends Father {
        //      const b = 20;
        //      public function getValue();
        //    }

    //////////////// One interface can extend more than one interface  //////////////////////////////

    // interface Father {
    //       const a = 101;
    //       public function disp();
    //    }
    //
    // interface Mother {
    //          const m = 102;
    //          public function showValue();
    //    }
    //
    // interface Son extends Father,Mother {
    //      const s = 103;
    //      public function getValue();
    //    }

    ///////////// Implementing Class   /////////////////////////////////////
    // interface Father {
    //       const mark = 101;
    //       public function disp();
    //       public function getValue();
    //    }
    //
    // // abstract  class Son implements Father //No Error
    // class Son implements Father {
    //     public $a;
    //     public function disp(){
    //         echo Father::mark;
    //     }
    //     public function getValue(){
    //
    //     }
    //   }
    //
    //   $obj = new Son;
    //   $obj->disp();

    ////////////  More than One interface can be implemented in a single class  //////////////////////////////////
      // interface Father {
      //     const sci = 101;
      //     public function disp();
      //     public function getValue();
      //  }
      //
      //  interface Mother{
      //    const math = 102;
      //  }
      //
      //  class Son implements Father,Mother {
      //      public function disp(){
      //          echo Father::sci;
      //          echo Mother::math;
      //      }
      //      public function getValue(){}
      //    }
      //  $obj = new Son;
      //  $obj->disp();

    //////////// Extend and Implement together  //////////////////////////////////
    class Father {
        public $sci = 101;

     }

     interface Mother{
       const math = 102;
       public function disp();
     }

     class Son extends Father implements Mother {
       //First:extend then implement
         public function disp(){
             echo $this->sci;
             echo Mother::math;
         }
       }
      $obj = new Son;
      $obj->disp();

 ?>
