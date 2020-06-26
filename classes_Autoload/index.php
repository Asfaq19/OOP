<?php

    function __autoload($classname) // class er name er pichone .php diye dile seta file er name hoye jabe.
    {

      include_once "classes/$classname.php";
      // Magic functions  automatically kono specific event e call hoy.
    }

    $abc = new ABC();
    $xyz = new XYZ();
 ?>
