<?php

//Have to declare very first line
// Like a Folder.
// Also sub folder
// namespace def\ghi\jkl
//can not store 2 folder as same name/Naming Conflict.
//2 Types (Brackated,Non-Brackated)



// function test(){

// }
// function test(){

// }
//Fatal error: Cannot redeclare test()
//(previously declared

//By default global namespace
////////////////////Sub Folder////////////////////////
// class xyz{
//
// }
// Fatal error: Namespace declaration statement
// has to be the very first statement or after any declare call in the script in
// namespace abc{
//  //Not in Global Namespace ,it is under particular Namespace
//   class xyz{
    // public function __construct()
    // {
    //   echo "XYZ from abc namespace";
    // }
//   }
// }

// namespace def{
//   class xyz{

//   }
  
// }



// namespace {
//
//   class xyz{
//
//   }
// }
// Fatal error: No code can exist outside of namespace



/////////////////  For Global  ///////////////////////////////
// namespace def
// namespace def\ghi //.....Sub Namespace
// {
// //  Not in Global Namespace ,it is under particular Namespace
//   class xyz{
//     public function __construct()
//     {
//       echo "XYZ from def \ghi ......namespace";
//     }
//   }
// }

//
// namespace {
  // Global Namespace
    // class xyz{
    //   public function __construct()
    //   {
    //     echo "XYZ from Global namespace";
    //   }

      // .................Way No. 3
      // use def\ghi\xyz;
    // $obj= new xyz();
    // }
  

    // $obj = new xyz();

    // For def class ......Way No.1
    // $obj = new def\ghi\xyz();



    // For def class .......Way No.2
    // use def\ghi\xyz as def; //উপরে থাকতে হবে

    
    //$obj = new def();

  
    

  //  use def\ghi\xyz;//Many Folders
  // $obj= new xyz();


   //
  //  }


  ////////////  Single class  ////////////////////////
  namespace abc\ghi;

  // namespace abc;
  class xyz{
  //   //এখানকার সব ফাংশন abc namespace এ চলে যাবে ।

    public function __construct() {
      echo "wwww";
    }
  }

  $zcc = new xyz;


  // class xyz{
    //   //এখানকার সব ফাংশন abc namespace এ চলে যাবে ।
    // }

 ?>
