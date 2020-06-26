<?php

    class EmailLogger implements LoggerInterface {

        public function log($message)
        {
          echo "Logging message to email: $message";
        }
    }
 ?>
