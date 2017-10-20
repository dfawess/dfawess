<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
$button = $app->layout->add(['Button','REFRESH']);
$button->link('index(lul)');
if(isset($_GET['max'])){
  $max = $_GET['max'];
  $min = $_GET['min'];
}else{
  $max=100;
  $min=1;
  $med=round(($max+$min)/2);
}
























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
