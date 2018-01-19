<?php
require 'connection.php';

$app = new \atk4\ui\App('Party');
$app->initLayout('Centered');


$form = $app->layout->add('Form');
$form->setModel(new Friend($db));
/*$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});*/

$form->onSubmit(function ($form) {
  $form->model->save();
  return new \atk4\ui\jsExpression('document.location = "index.php" ');
});

$app->add(['ui'=>'divider']);

$grid = $app->layout->add('Grid');
$grid->setModel(new Friend($db));
$grid->addQuickSearch(['surname','phone_number','name']);

$button=$app->add(['Button','Admin','inverted white']);
$button->link(['check']);
