<?php

  // Type hinting


//  int,string,pointer,char "php" support করে না।
//Type hinting Array,interface,class
//Fatal Error means Not Executed.

//Fatal error: Uncaught TypeError: Argument 1 passed to test()
//must be of the type array, string given,
//////////////////////Array/////////////////////////////
  /* function test(array $arr)
   {
     echo "<table>";
      foreach($arr as $k=>$v){
        echo "<tr>
        <td>$k</td>
        <td>$v</td>
            </tr>";
      }
      echo "</table>";
   }

   $array = 'fdfsdf';
   // $array = ['abc'=>'ABC','xyz'=>'XYZ'];
   test($array);
   */
   //..............String............................
   //
   // class ABC{
   //   public function doSomething(){
   //          echo "Doing Something";
   //   }
   // }
   //
   // class XYZ{
   //   public function doSomethingElse(){
   //      echo "Doing Something Else";
   //   }
   //
   //   // public function __construct(ABC $abc)
   //   // {
   //   //   $this->abc = $abc;
   //   // }
   //
   // }
   //
   // function test(ABC $abc){
   //   $abc->doSomething();
   // }
   //
   // // $abc = new ABC();
   // $abc = new XYZ();
   // test($abc);

   //////////////////////Interface////////////////////////////

  interface test{
    public function dosomething();
  }

   class ABC implements test{
     public function dosomething()
     {
       echo "Doing Something from ABC";
     }
    }

    class XYZ implements test{
      public function dosomething()
      {
        echo "Doing Something from XYZ";
      }
      public function dosomethingelse(){
        echo "Doing Something Else";
      }
    }

     function test(test $abc)
     // function test(test $abc)
     {
       $abc->dosomething();
     }
     $abc = new ABC();


     test($abc);

 ?>
