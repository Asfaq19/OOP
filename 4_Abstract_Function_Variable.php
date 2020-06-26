<?php
//Not So well...Try Another Video/Lesson

  // Abstract means "বাকি থাকা,"।

  /* এটা এমন একটা ক্লাস হয় যাতে বাদবাকি ক্লাস গুলোর
   Function Declare করা হয় কিন্তু implement করা হয়নি।
   ব্যাবহার হবে সেখানে যে class একে extend করবে।
  */

  /*
    Abstract class এ Abstract Method define করা যায় না। শুধু মাত্র declare করা যায়।
  */

/*
  Rules:
  1.Objects of an abstract class can not be created....
  2.The particular abstract method of an abstract class must be
  defined in its Subclass/Childclass.We can not define it in the abstract
  Class.
  3.if there is any abstract method in a class,that class must be abstract.
  4.A class can be abstract without having abstract method.
  5.it is not necessary to declare all methods abstract in a abstract class.Non abstract methods can also be exist.
  6.We can not declare abstract constructors or abstract static methods.
  7.if you are extending any abstract class that have abstract method,you must either
    provide the implementation of the method or make this class abstract.


  */


////////////////// 2 Classes /////////////////////////////////

// class FullTimeEmployee{
//
//   protected $firstname;
//   protected $lastname;
//   protected $annualSalary;
//
//   public function getFullName(){
//     return $this->firstname." ".$this->lastname;
//   }
//
//   public function getMonthlySalary(){
//     return $this->annualSalary/12;
//   }
//
//   // public function __construct($f,$l){
//   //   $this->firstname = $f;
//   //   $this->lastname = $l;
//   // }
//
//
//   public function __construct($a){
//     $this->annualSalary = $a;
//
//   }
// }
//
// class ContractEmployee{
//   protected $firstname;
//   protected $lastname;
//   protected $hourlyRate;
//   protected $totalHours;
//
//   public function getFullName(){
//     return $this->firstname." ".$this->lastname;
//   }
//
//   public function getMonthlySalary(){
//     return $this->hourlyRate * $this->totalHours;
//   }
//
//   // public function __construct($f,$l){
//   //   $this->firstname = $f;
//   //   $this->lastname = $l;
//   // }
//
//   public function __construct($h,$t){
//     $this->hourlyRate = $h;
//     $this->totalHours = $t;
//   }
//
// }
//
// // $fulltime = new FullTimeEmployee('FullTime','Employee');
// // $contract = new ContractEmployee('Contract','Employee');
// $contract = new ContractEmployee(30,5);
// $fulltime = new FullTimeEmployee(600000);
//
// // echo $fulltime->getFullName();
// // echo $contract->getFullName();
// echo $contract->getMonthlySalary();
// echo $fulltime->getMonthlySalary();





////////////////////////////Removing Common Functionalities with inheritence////////////////////////////

// Uncaught Error: Cannot instantiate abstract class BaseEmployee
  //Fatal error: Class BaseEmployee contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
//   abstract class BaseEmployee
//    // class BaseEmployee
//    {
//     // Use_1: "abstract" keyword এর কারণে object create করা যাবে না।
//     // Use_2: Enforcement.
//     // অর্থাৎ Define করতেই হবে এমন  ক্ষেত্রে .........Abstract
//     // Definition must be written in that function....
//
//     protected $firstname;
//     protected $lastname;
//
//     public function getFullName(){
//       return $this->firstname ." ".$this->lastname;
//     }
//
//     // public abstract function getMonthlySalary();
//     //No Body..........
//     //Fatal error: Class FullTimeEmployee contains 1 abstract
//     // method and must therefore be declared abstract
//     //or implement the remaining methods (BaseEmployee::getMonthlySalary)
//
//     //With body
//     public function getMonthlySalary(){
//
//     }
//
//     public function __construct($f,$l){
//       $this->firstname = $f;
//       $this->lastname  = $l;
//     }
//   }
//
//
//   class FullTimeEmployee extends BaseEmployee  {
//     protected $annualSalary;
//
//     public function getMonthlySalary(){
//     return $this->annualSalary/12;
//     }
//   }
//
// class ContractEmployee extends BaseEmployee {
//
//   protected $hourlyRate;
//   protected $totalHours;
//
//   public function getMonthlySalary(){
//     return $this->hourlyRate * $this->totalHours;
//   }
//
// }
//
// // $fulltime = new FullTimeEmployee('FullTime', 'Employee');
// //
// $contract = new ContractEmployee('Contract','Employee');
// //
// // echo $fulltime->getFullName();
// // echo $contract->getFullName();
// //
// // echo $fulltime-> getMonthlySalary();
// echo $contract-> getMonthlySalary();

// $employee = new BaseEmployee('Base','Employee');
// echo $employee-> getFullName();
/*Fatal error:
Uncaught Error: Cannot instantiate abstract
class BaseEmployee in............. */

///////////////From GeeekyShows/////////////////////////////////////////////

abstract class Father /*Fatal error: Class Father contains 1 abstract method and
must therefore be declared abstract or implement the remaining methods*/
//if there is any abstract method in a class,that class must be abstract.
// class Father
{
  function disp(){
    echo "Normal Method<br>";
  }

  abstract function absmethod();//No definition
}

// abstract class Son extends Father
class Son extends Father
{
  public function absmethod(){
    //Definition is defined here.......
    echo "Abstract Method<br>";
  }


  //If not defined:
  /*
   Fatal error: Class Son contains 1 abstract method and must therefore be
   declared abstract or
   implement the remaining methods (Father::absmethod)
   in C:\xampp\htdocs\OOP\4_Abstract.php on line 164
  */

}

// $obj = new Father;//Fatal error: Uncaught Error: Cannot instantiate abstract class Father
$obj = new Son;//Child classe's object.Not Parent Class.
$obj->absmethod();



 ?>
