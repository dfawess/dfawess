<?php
require 'connection.php';

$app = new \atk4\ui\App('Party');
$app->initLayout('Centered');

$check = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$check ->addField('password');
