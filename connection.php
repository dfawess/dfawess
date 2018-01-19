<?php
require 'vendor/autoload.php';
$db = new \atk4\data\Persistence_SQL('mysql:dbname=party;host=localhost','root','');

class Friend extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name',['required'=>TRUE,'caption'=>'Имя']);
    $this->addField('surname',['required'=>TRUE,'caption'=>'Фамилия']);
    $this->addField('phone_number',['caption'=>'Телефон','default'=>'371']);
    $this->addField('age',['required'=>TRUE,'caption'=>'Возраст']);
  }
}
