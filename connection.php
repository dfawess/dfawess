<?php

require '../vendor/autoload.php';
$db = new \atk4\data\Persistence_SQL('mysql:dbname=travel_agency;host=localhost','root','');

class Place extends \atk4\data\Model {
  public $table = 'places';
  function init() {
      parent::init();
      $this->addField('name',['caption'=>'Place','required'=>TRUE]);
      $this->hasMany('User',new User);

  }
}
class User extends \atk4\data\Model {
  public $table = 'clients';
  function init() {
      parent::init();
      $this->addField('name',['caption'=>'Name','required'=>TRUE]);
      $this->addField('surname',['caption'=>'Surname','required'=>TRUE]);
      $this->addField('email',['caption'=>'Email','required'=>TRUE]);
      $this->addField('phone_number',['caption'=>'Phone Number','required'=>TRUE,'default'=>'+','type'=>'integer']);
      $this->addField('depart_date',['caption'=>'Depart Date','required'=>TRUE,'type'=>'date']);
      $this->addField('arrival_date',['caption'=>'Arrival Date','required'=>TRUE,'type'=>'date']);
      $this->hasOne('places_id',new Place)->addTitle();
  }
}
