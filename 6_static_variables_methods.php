 <?php
 // normal class এর  variable/function "object" এর সাথে "linked" থাকে।

 // static variable/function  "object" এর সাথে "linked" থাকে না।
 // এটা directly class এর সাথে linked থাকে।

/////////////////////////////////////////////////////////////////////////
// normal = "object"
// static = "class"

// class abc {
//   public static $data = 'test data';
//
//   public function xyz(){
            
//       return "xyz function";
//   }
// }
// // scope resolution operator
// echo abc :: xyz();// way of Accessing.
 // echo abc::$data;



///////////////////////////////////////////////////////////////////////

// class abc {
//   public  $data = 'test data';
//
//   public  function xyz(){
//       echo "xyz function";
//   }
// }
//
// $a = new abc();
// $a->data = 'object 1';
//
// $b = new abc();
// $b->data = 'object 2';
//
// //ekhane a and b te 2rokom data ache.
// // echo $a->data;
// echo $b->data;


///////////////////////////////////////////////////////////
/*
class House{

  public static $size;

  public static function getsize(){

    // return $this->size;
    // $this refer করে object কে। এখানে $this কাজ করবে না।
    // $this object এর সাথে related
    return self :: $size; //এখানে  self:: use হয়
  }
  public static function setsize($s){
        self :: $size = $s;
  }

}
echo House :: setsize(1200);
// echo House :: setsize();
echo House :: getsize();

*/

/////////////////////////////////////////////////////////
///*
// class abc{
//
//   public static $objectcount=0;
//
//   public static function getcount(){
//     return self:: $objectcount;
//   }
//
//   public function __construct(){
//     self :: $objectcount++;
//   }
//
// }
//
//  new abc();
//  new abc();
// // $c = new abc();
//
//
// //static variable class er sathe related thake.object er sathe noy.
//
//
// // echo abc:: getcount();
// echo abc::$objectcount;
//*/

//////////////////////////////////////////////////////
// class abc{
//
//   public static $objectcount=0;
//
//   public static function getcount(){
//     return self:: $objectcount;
//   }
//   public function __construct(){
//     self :: $objectcount++;
//   }
// }
//
//
// class xyz extends abc{
//
//   public static function getcount(){
//
//       parent ::getcount();
//       //new functionality here
//   }
// }
// $a = new abc;
// echo abc:: getcount();


 ?>
