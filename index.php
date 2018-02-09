<?php

require 'connection.php';
$db = new \atk4\data\Persistence_SQL('mysql:dbname=travel_agency;host=localhost','root','');

$app = new \atk4\ui\App('Travel Agency');
$app->initLayout('Admin');

$form = $app->layout->add('Form');
$form->setModel(new User($db));

$app->layout->leftMenu->addItem(['Main Menu','icon'=>'book'],['index']);

$app->layout->leftMenu->addItem(['Places','icon'=>'cloud'],['places']);

$app->layout->leftMenu->addItem(['Admin','icon'=>'computer'],['user']);

/*$form->onSubmit(function ($form) {
  $form->model->save();
  return new \atk4\ui\jsExpression('document.location = "index.php" ');
});*/
