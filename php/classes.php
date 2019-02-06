<?php


  /**
   *
   */
  class Agent extends Person {
    protected $midNameInit;
    protected $postion;
    protected $agencyId;

    function __construct($id,$fn,$mi,$ln,$bp,$e,$po,$ai) {
      parent::__construct($id,$fn,$ln,$bp,$e);
      $this->midNameInit = $mi;
      $this->postion = $po;
      $this->agencyId = $ai;
    }

    function getPosition(){
      return $this->$postion;
    }

    function setPosition($newValue){
      $this->$postion = $newValue;
    }

    function getAgencyId(){
      return $this->$agentId;
    }

    function setAgencyId($newValue){
      $this->$agentId = $newValue;
    }

    function __toString(){
      $properties1 = get_object_vars($this->parent);
      $properties = get_object_vars($this);
      $str = "";
      foreach ($properties as $property => $value) {
        $str .= $value.",";
      }
      return $str;
    }
  }

  $a = new Agent(1,'DongMing','','Hu','12345','1@2.com','Boss',1);
  echo "$a";


  class person {
    public $id;
    public $firstName;
    public $lastName;
    public $busPhone;
    public $email;
    function __construct($id,$firstName,$lastName,$busPhone,$email)
    {
      $this->id = $id;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->busPhone = $busPhone;
      $this->email = $email;
    }

    function __toString() {  // Magic funtion
      return $this->firstName." ".$this->lastName;
    }

  }

  /**
   *
   */
  class Customer extends Person {
    public $address;
    public $city;
    public $prov;
    public $postal;
    public $country;
    public $homePhone;
    public $agentId;

    function __construct($id,$fName,$lName,$busP,$email,$add,$city,$prov,$post,$country,$homeP,$agtId) {
      parent::__construct($id,$fName,$lName,$busP,$email);
      $this->address = $add;
      $this->city = $city;
      $this->prov = $prov;
      $this->postal = $post;
      $this->country = $country;
      $this->homePhone = $homeP;
      $this->agentId = $agtId;
    }
  }



 ?>
