<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('GIGALUL');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('LUL');
$button->icon = 'plus';
