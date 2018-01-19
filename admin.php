<?php

require 'connection.php';

$app = new \atk4\ui\App('Party');
$app->initLayout('Admin');

$crud = $app->layout->add('Crud');
$crud->setModel(new Friend($db));
$crud->addQuickSearch(['surname','phone_number','name','age']);

$app->layout->leftMenu->addItem(['Main Menu','icon'=>'book'],['index']);
