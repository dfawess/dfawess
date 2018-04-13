<?php

require 'connection.php';

if($_SESSION['admin_access']='gfaigfuoawgybfuwgyawugfy'){
  $app = new \atk4\ui\App('Admin');
  $app->initLayout('Centered');

  $check = new \atk4\data\Model(new \atk4\data\Persistence_Array($db));
  $check->addField('password',['type'=>'password','required'=>TRUE]);


  $form = $app->layout->add('Form');
  $form->setModel($check);
  if(isset($_ENV['pass'])){
    $pass=$_ENV['pass'];
  }else{
    $pass='password';
  }
  $pass = $_ENV['pass'];
  $form->onSubmit(function ($form) use($pass,$app) {
    $form->model->save();
    if($form->model['password'] == $pass){
    $_SESSION['admin_access']='gfaigfuoawgybfuwgyawugfy';
    return $app->jsRedirect(['clients']);
  }else{
    return $form->error('password', "Durak?");
  }
  });

}else{
  header('Location: index.php');
}
