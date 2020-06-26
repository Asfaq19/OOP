<?php

//"Compile time" এ value assign না করে "Run time" এ value assign করে

     // static $abc = 'I am ABC variable';
     // echo $abc;

    class DB{

      protected static $table = ' basetable';

      public function select(){
        // echo "SELECT * FROM".static::$table;
        echo "SELECT * FROM".DB::$table;//Pending upto RunTime......
        // echo "SELECT * FROM".self::$table;
          // 'basetable' না এসে যেন 'abc' আসে তাই আমরা keyword ব্যাবহার করবো static not self.
          //"self" এর জায়গায় "static"
          //per table এ আলাদা model।
      }
      public function insert(){
        // echo "INSERT INTO".self::$table;
        echo "INSERT INTO".static::$table;
      }

    }

    class abc extends DB{

      protected static $table = ' abc';
      // 'basetable' না এসে যেন 'abc' আসে তাই আমরা keyword ব্যাবহার করবো static. Not self.

    }

    

    class def extends DB{

      protected static $table = ' def';
      // 'basetable' না এসে যেন 'abc' আসে তাই আমরা keyword ব্যাবহার করবো static. Not self.

    }


    // class userAccounts extends DB{
    //   protected static $table = 'user_accounts';
    // }

    $var = new DB();
    $var->select();

    // $abc = new abc; //RunTime
    // $abc->select();
    // $abc->insert();


  
    // $accounts = new userAccounts();
    // $accounts -> select();
    // $abc = new abc;
    // $abc->select();



      // $db = new DB;
      // $db->select();
      // $db->insert();

  // php 5.3 .......above



 ?>
