  <?php

 //  Encapsulation মানে Encapsulate করা।
 // Access level সেট করা।
 // অর্থাৎ যেকোনো ক্লাস এর function/variable  এর access সেট করা।
 // কোথা থেকে access হওয়া উচিত, কোথায় না হওয়া উচিত।
 //
 // OOP তে variable/function কে ৩ জায়গা থেকে আমরা access করি।
 // 1.Within the class (Variable/function কে ওই ক্লাস এর মধ্যেই ব্যাবহার করা)
 // 2.Child class
 // 3.Object
 //
 // Access level(3):public, protected, private
 // Public:For all(Public buses)
 // private:For me(private mobilephone)
 // protected:For me and my family members (my bike)
 //
 // public:    this class ___with child class, with Object
 // private:    this class ___ not child class,not Object
 // protected:  this class ___with child class, not Object


 class TV{
          //Here "private" is within this class.
          //বাইরের কোনও ক্লাস এ এটা ব্যাবহার করা যাবে না।
          protected $model ;
          // private $model;
          // public $model ;
          // public $volume;
          // private $volume;

            public function volumeUp(){
              $this -> volume++;
            }
            public function volumeDown(){
              $this -> volume--;
            }

            // public  function getModel()
            protected function getModel()
            // private  function getModel()
            {
              //...........This is API.............................
              return $this->model;
            }

            // public function setModel(){
            //   return $this->volume;
            //
            // }

            public function __construct($m,$v){

              $this->model = $m;
              $this->volume =$v;
            }

  }


  class plazma extends TV {

  public  function test()
    {
      $this->volume;
      $this->model;

    }

    public  function getModel()
   // protected function getModel()
   // private  function getModel()
   {
     //...........This is API.............................
     return $this->model;
   }

    //  public function getModel(){
    //   // parent class থেকে যখন আমরা child class এ ফাংশন override করি
    //   // তখন  parent class এর চেয়ে child class এর
    //   // access level বেশি secure হতে পারবে না
    //   // private > protected > public
    //     return $this->model;
    // }
  }


$tv = new plazma('abc',1);
// $tv = new TV('abc',1);
 // $tv->model = 'xyz';
echo $tv->getModel();
// echo $tv->setModel();

 // echo $tv->model;
// echo $tv->volume;


// echo $tv->getModel();
// Object create হওয়ার পর আমরা শুধু ঐসব property তেই access করতে পারি
// যেটা শুধু public হবে। না protected,না private property তে access হবে।

?>
