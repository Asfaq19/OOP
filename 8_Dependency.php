<?php
// Dependency Injection.
// DI is a design pattern,like "MVC"
// Code manage,reusability
//  library is a collection of subroutines or classes used to develop software

class Logger{

    public function log($message){
      echo "Logging message : $message";
    }
}

// $logger = new Logger;
// $logger->log(7);


class UserProfile{

  // private $logger;

  public function createUser(){

    // $this->logger->log("User Created");

    //Create User
    // $logger = new Logger();
    // $logger->log("User Created");
    $this->logger-> log("User Created");

  }

  public function updateUser(){

      // $this->logger->log("User Updated");

      //Update User
      // $logger = new Logger();
      $this->logger->log("User Updated");
      // $logger->log("User Updated");
  }

  public function deleteUser(){

      // $this->logger->log("User Deleted");

      //Delate User
      // $logger = new Logger();
      $this->logger->log("User Delated");
      // $logger->log("User Delated");
  }

  // public function __construct(Logger $logger)
  public function __construct(Logger $logger)//type hint
  {
    // $this->logger = new Logger;
    $this->logger = $logger;
    //Sub Object
    // Dependency Injection
    // DRY = Dont Repeat Yourself.
  }

}
$logger = new Logger();
$profile = new UserProfile($logger);
// $profile = new UserProfile($logger);
$profile->createUser();
$profile->updateUser();
$profile->deleteUser();


// $logger->log("This is a message");
 ?>
