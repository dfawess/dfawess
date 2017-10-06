<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
$img='http://r72.cooltext.com/rendered/cooltext261244938435107.png';
$lul = $app->add(['Label','haHAA','image'=>$img]);
$lul -> set(['massive'=>true]);


$lul->set('omegalul');

































/*Class Cat {
  public $age;
  public $name;
  public $pol;
  public $color = 'Grey';
  public function SkolkoLet($time){
    $year= $time - $this->age;
    return $year;
  }
}
$app = new \atk4\ui\App('GIGALUL');
$app->initLayout('Centered');
for ($i=2; $i<=20;) {

  $button = $app->add('Button');
  $button->set(' '.$i);
  $i=$i+2;
  if(($i/2)%2>=1) {
  $button->set(['primary'=>TRUE]);

  }
}*/
