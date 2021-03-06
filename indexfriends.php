<?php
require '../vendor/autoload.php';
require 'app.php';

$app = new App('public');
//$app->initLayout('Centered');
$db = new \atk4\data\Persistence_SQL('mysql:dbname=friends;host=localhost','root','');

session_start();



class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>'+371']);
    $this->addField('email');
    $this->addField('login');
    $this->addField('password',['type'=>'password']);
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes', ['type'=>'text']);
  }
}

/*$a = [];

    $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));

    $m_register->addField('name');



    $f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));

    $f->setModel($m_register);
*/



$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
/*$form->onSubmit(function($form) {
  $form->model->save();
  return $form->success('Record updated');
});*/

$form->onSubmit(function ($form) {
   $_SESSION ['name'] = $form->model['name'];
   $_SESSION ['surname'] = $form->model['surname'];
   $_SESSION ['email'] = $form->model['email'];
   $_SESSION ['phone_number'] = $form->model['phone_number'];
   $_SESSION ['notes'] = $form->model['notes'];

   return new \atk4\ui\jsExpression('document.location = "task.php" ');
 });



$crud = $app->layout->add('Crud');
$crud->setModel(new Friends($db));
$crud->addQuickSearch(['surname']);
