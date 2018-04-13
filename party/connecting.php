<?php
require 'vendor/autoload.php';

if (isset($_ENV['bukvi'])) {
     $db = \atk4\data\Persistence::connect($_ENV['bukvi']);
 } else {
     $db = \atk4\data\Persistence::connect('mysql:host=localhost;dbname=party;charset=utf8', 'dfawess', '');
 }

class Friend extends \atk4\data\Model {
    public $table = 'party-dfawess';
    function init() {
        parent::init();
        $this->addField('name',['caption'=>'Имя','required'=>TRUE]);
        $this->addField('surname',['caption'=>'Фамилия','required'=>TRUE]);
        $this->addField('phone_number',['caption'=>'Номер телефона','required'=>TRUE,'default'=>'+371','type'=>'integer']);
        $this->addField('age',['caption'=>'Возраст','required'=>TRUE,'enum'=>['14','15','16','17','18','19']]);
    }
}
