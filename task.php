<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('quliti');
$app->initLayout('Centered');
session_start();
$name=$_SESSION['name'];
$surname=$_SESSION['surname'];
$phone_number=$_SESSION['phone_number'];
$email=$_SESSION['email'];
$notes=$_SESSION['notes'];
$label=$app ->add(['Label','qy '.$name.' '.$surname,'massive violet']);
$break=$app ->add(['Text','<br><br>']);
$label=$app ->add(['Label','zvoni '.$phone_number,'small red bottom attached']);
$label=$app ->add(['Label','pishi '.$email,'small red ']);
$break=$app ->add(['Text','<br><br>']);

$label=$app ->add(['Label','ja daun: '.$notes,'small red ']);
$break=$app ->add(['Text','<br><br>']);
