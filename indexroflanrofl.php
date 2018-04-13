<?php

date_default_timezone_set('UTC');
require 'vendor/autoload.php';

$app = new \atk4\ui\App('index.phop');
$app->initLayout('Centered');
$app->layout->add(['Header', 'Paginator tracks its own position']);
$app->add(['Paginator', 'total' => 40]);

$app->add(['Header', 'Dynamic reloading']);
$seg = $app->add(['View', 'ui' => 'blue segment']);
$label = $seg->add(['Label']);
$bb = $seg->add(['Paginator', 'total' => 50, 'range' => 2, 'reload' => $seg]);
$label->addClass('blue ribbon');
$label->set('Current page: '.$bb->page);

$app->add(['Header', 'Local Sticky Usage']);
$seg = $app->add(['View', 'ui' => 'blue segment']);


$month_paginator = $seg->add(['Paginator', 'total' => 12, 'range' => 3]);
$seg->add(['ui'=>'hidden divider']);
$day_paginator = $seg->add(['Paginator', 'total' => 31, 'range' => 3]);
$seg->add(['ui'=>'hidden divider']);
$label = $seg->add(['Label']);
$label->addClass('orange');

$a=$_GET['atk_centered_view_2_paginator'];
$app->add(['Label',$a]);
$b=$_GET['atk_centered_view_2_paginator_2'];
$app->add(['Label',$b]);
