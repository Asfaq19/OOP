<?php
/////////////////// Contructor ///////////////////////////////////
    class TV{ //Parent Class
       public $model ;
       public $volume;
       //public $timer;

       function volumeUp(){
         $this -> volume++;
       }
    
       function volumeDown(){
         $this -> volume--;
       }

       function __construct($m, $v=2){
         $this->model = $m;
         $this->volume =$v;
       }

     }
     $tv = new TV('def');
     $tv_one = new TV('cvb',4);
     $tv_one->volumeUp();
     echo $tv_one->volume;
     echo $tv_one->model;


    ///////////////Inheritence///////////////////////////////////
    // class TV{ //Parent Class
    //    public $model ;
    //    public $volume;
    //    //public $timer;
    //
    //    function volumeUp(){
    //      $this -> volume++;
    //    }
    //
    //    function volumeDown(){
    //      $this -> volume--;
    //    }
    //    function __construct($m,$v){
    //
    //      $this->model = $m;
    //      $this->volume =$v;
    //    }
    //  }
    //
    //
    //    class TvWithtimer extends TV { // "class TvWithtimer" follow korche "class TV" ke
    //                                  //class TV er sob functionality class TvWithtimer e chole aslo
    //                                  //Eta Child Class, Parent Class Holo TV
    //      public $timer = true;
    //
    //      // function __construct() {} // jodi amra "function__construct" ekhane dei tahole eta call hobe
    //                                   //Nahole "Parent class" er "function__construct" kaj korbe/call hobe
    //
    //    }
    //
    //    class plazmaTv extends TV{
    //      public $plazma = true;
    //    }
    //
    //    $tvwithtimer = new TvWithtimer('Tv with timer',2); //Eta "class TvWithtimer" er object
    //    $plazma = new plazmaTv('plazma TV',3);
    //
    //
    //    echo $plazma->model;
    //    echo $plazma->volume;
    //    echo $tvwithtimer->model;
    //    echo $tvwithtimer->volume;

    /////////////////OverRide/////////////////////////////////////
    // class TV{ //Parent Class
    //    public $model='abc' ;
    //    public $volume;
    //    //public $timer;

    //    function volumeUp(){
    //      $this -> volume++;
    //    }

    //    function volumeDown(){
    //      $this -> volume--;
    //    }
    //    function __construct($m,$v){

    //      $this->model = $m;
    //      $this->volume =$v;
    //    }
    //  }

    //  class plazmaTv extends TV{

    //    public $model='def';
    //    public $volume=5;

    //    function __construct()
    //    {
    //       //Calling........
    //    }
    //  }

    //  $plazma = new plazmaTV('new12',3);
    //  // $plazma->model='ghfgh';
    //  echo $plazma->volume;
    //  echo $plazma->model;


 ?>
