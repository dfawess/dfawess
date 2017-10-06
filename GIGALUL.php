<?php
require 'vendor/autoload.php';
Class Car {
  public $model;
  public $speed;
  public $color = 'White';
  const WHEELS = 4;
  public function DistMeter($time){
    $distance= $this->speed * $time;
    return $distance;
  }
  public function WheelCount(){
    return self::WHEELS;
  }
}
/*$app = new \atk4\ui\App('GIGALUL');
$app->initLayout('Centered');
for ($i=2; $i<=20;) {

  $button = $app->add('Button');
  $button->set(' '.$i);
  $i=$i+2;
  if(($i/2)%2>=1) {
  $button->set(['primary'=>TRUE]);

  }
}*/
