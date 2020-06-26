<?php
  class UserProfile{

    // private $logger;

    public function createUser()
    {
      echo "Creating User ";
      $this->logger->log("User Created");
    }

    public function updateUser()
    {
      echo "Updating User";
      $this->logger->log("User Updated");

    }

    public function deleteUser()
    {
      echo "Deleting User";
      $this->logger->log("User Deleted");
    }

    public function __construct(LoggerInterface $logger)
      // public function __construct(Logger $logger)
      // public function __construct(DBLogger $logger)
        // public function __construct(FileLogger $logger)
          // public function __construct(EmailLogger $logger)
    {
      $this->logger = $logger;
    }
  }

 ?>
