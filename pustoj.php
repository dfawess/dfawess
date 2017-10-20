<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
$meth=$_GET['med'];
$layebleasd=$app->add('Label');
$layebleasd->set('Ti molodec, moe chislo='.$meth );
