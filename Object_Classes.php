
<?php

class TV {

  public $model = 'xyz';
  public $volume = 2;

  function volumeUp()
  {

    $this->volume++;
  }

  function volumeDown()
  {

    $this->volume--;
  }
}

$tv_one = new TV;
$tv_two = new TV;

// $tv_one->volumeUp();
//  $tv_two->volumeDown();
//  $tv_one->volumeDown();



// $tv_one->model='abc';
// $tv_two->model='pqr';



// echo $tv_one->volume;
// echo $tv_two->volume;
// echo $tv_one->model;
// echo $tv_two->model;

?>
