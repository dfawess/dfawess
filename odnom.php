<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('quliti');
$app->initLayout('Centered');

session_start();

if(isset($_SESSION['n'])){
  $a=$_SESSION['n'];
  $_SESSION['n']=$_SESSION['n+1'];
  $_SESSION['n+1']=$_SESSION['n+1']+$a;
  $_SESSION['f']=$_SESSION['f']+1;
}else{
  $_SESSION['n']=1;
  $_SESSION['f']=1;
  $_SESSION['n+1']=1;
}
$rofl=$_SESSION['n+1']/$_SESSION['n'];
$label=$app ->add(['Label',$_SESSION['n+1'],'massive green']);
$button1=$app ->add(['Button','+']);
$button1->link(['odnom']);
$button=$app ->add(['Button','Logout','massive red']);
$button->link(['logout1']);
$label2=$app ->add(['Label',$rofl,'massive green']);

$label3=$app ->add(['Label',$_SESSION['f'],'massive green']);
