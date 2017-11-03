<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
if(isset($_GET['max'])){
  $max = $_GET['max'];
  $min = $_GET['min'];
  $med=round(($max+$min)/2);
}else{
  $max=100;
  $min=1;
  $med=round(($max+$min)/2);
}
if(isset($_GET['nazhalnet'])){
if(($min==$max) or ($max-$min==1)){
  $label1=$app ->add(['Label','error','massive red']);
}
}


$label=$app ->add(['Label','TVOE 4ISLO BOLSHE '.$med.' ?']);

$button1=$app->add(['Button','DA']);
$button1->link(['index(lul)','max'=>$max,'min'=>$med,'nazhalnet'=>'rofl']);

$button2=$app->add(['Button','NEJ']);
$button2->link(['index(lul)','max'=>$med,'min'=>$min,'nazhalnet'=>'rofl']);

$button3=$app->add(['Button','da eto moe']);
$button3->link(['pustoj','med'=>$med]);
























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
