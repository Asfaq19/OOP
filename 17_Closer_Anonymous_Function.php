<?php
  //  Anonymous Function - যে ফাংশন এর নাম জানা নাই।

  //   function {
  
  // }

  /////////////Lambda 1//////////////////
   // $abc = function(){
   //   echo "ABC Function";
   // };
   // $abc(); //Call
   

//////////////////// Lambda 2 //////////////////////////
  //Function as a parameter.......!!!!!!!
  // get(function(){
  //
  // });

  /////////////////////Lamda 3///////////////////////////
       // $xyz = 'xyz';
       //  $abc = function($a)
        // $abc = function()
        // {
        //   echo $a;
          // echo $xyz;
        // };
        // $abc($xyz);
        // $abc();

  ////////////////////// get  /////////////////////////////////
    // function get($abc)
    // {
    //   echo $abc();
    // }
    //
    // get(function(){
    //   return "string from function";
    // });

///////////////////////Lamda 4///////////////////////////
//       function get($abc){
//         echo $abc();
//         /*
//         $abc()->Function because:Recoverable fatal error:
//         Object of class Closure could not be
//         converted to string
//         */
//       }
// //
// // //==================== Extra but linked  =============================
// //
//        $abc = "Variable ABC string value";
//
//       get(function() use($abc){
//         //Anonymous function.............
//
//         return $abc;
//         // return "String From Function";
//       });

    ////////////////////Lamda 5/////////////////////////////


          //  $abc = "Variable ABC string value";
          //
          // $xyz = function() use($abc)
          // {
          //   //Anonymous function.............
          //   //"use" ব্যাবহার করায় Value pass না হয়ে Copy হয়।
          //
          //   echo $abc;
          // };
          // $abc = "Updated Value.";
          // $xyz();

    ///////////////////////Lamda 6/////////////////////////////
        //   $abc = "Variable ABC string value";

        //  $xyz = function() use(&$abc)
        //  {
           // Value Copy না হয়ে Pass করার জন্য "&" ব্যাবহার হয়।
           // "&" ব্যাবহার করার মাধ্যমে আমরা Memory address/Memory location pass করি।
           // C তে আমরা pointer pass করি.PHP এর Background এ C run হয়।
           // Pass by Reference.Not Pass by Value.
           // Address এ value change হয়ে যায় এবং function call করাতে new value আসে।
           // Anonymous function.............
        //    echo $abc;
        //  };
        //  $abc = "Updated Value.";
        //  $xyz();

    ////////////////////lambda 7///////////////////
    // get('admin',function(){
    //
    // });
?>
