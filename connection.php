<?php

session_start();

require 'vendor/autoload.php';
$db = new \atk4\data\Persistence_SQL('mysql:dbname=party;host=localhost','root','');

class Friend extends \atk4\data\Model {
    public $table = 'friends';
    function init() {
        parent::init();
        $this->addField('name',['caption'=>'Имя','required'=>TRUE]);
        $this->addField('surname',['caption'=>'Фамилия','required'=>TRUE]);
        $this->addField('phone_number',['caption'=>'Номер телефона','required'=>TRUE,'default'=>'+371','type'=>'integer']);
        $this->addField('age',['caption'=>'Возраст','required'=>TRUE,'enum'=>['15','16','17','18']]);
    }
}
