<?php

require 'connection.php';

$app = new \atk4\ui\App('Travel Agency');

require 'visual.php';
$name=$_ENV['slovo'];
$lable=$app->add(['Lable',$name,'massive red']);

$form = $app->layout->add('Form');

$form->setModel(new Record($db));



/*$form->onSubmit(function ($form) {
  $form->model->save();
  return new \atk4\ui\jsExpression('document.location = "index.php" ');
});*/
