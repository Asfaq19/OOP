<?php
// Polymorphism
// means "Many types,Manyforms"
// একিরকম data type এর variable,function,object multiple behavior রাখলে সেটা Polymorphism.
//

function __autoload($class){
  include_once "classes/$class.php";

}

function getlogger($type){
  switch($type){
    case 'email';
    return new EmailLogger();
    break;

    case 'database';
    return new DBLogger();
    break;

    case 'file';
    return new FileLogger();
    break;
  }
}

//$logger = new FileLogger();

// $logger = new Logger;
// $logger = new DBLogger;
// $logger = new FileLogger;
// $logger = new EmailLogger;
// $logger = getlogger('file');
// $logger = getlogger('database');
$logger = getlogger('email');
$profile = new UserProfile($logger);
 $profile->createUser();



 ?>
