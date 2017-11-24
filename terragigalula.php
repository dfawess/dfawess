<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
$db = new \atk4\data\Persistence_SQL('mysql:dbname=friends;host=localhost','root','');


class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>371]);
    $this->addField('email');
    $this->addField('login');
    $this->addField('password',['type'=>'password']);
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes', ['type'=>'text']);
  }
}
$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});

$crud = $app->layout->add('Crud');
$crud->setModel(new Friends($db));
$crud->addQuickSearch(['surname']);
$crud->addQuickSearch(['name']);
