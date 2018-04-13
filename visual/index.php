<?php

require "../vendor/autoload.php";

$app = new \atk4\ui\App('Labdien');
$app->initLayout('Centered');

$app->layout->template->del('Header');

$logo = 'kot.jpg';

$app->layout->add([
    'Header',
    'ti loh',
    'size'=>'tiny',
    'aligned'=>'right'
],'Header');


$app->layout->add(['Image', $logo,'medium centered'], 'Header');
