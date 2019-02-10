<?php

	class Person {
		protected $id;
		protected $firstName;
		protected $lastName;
		protected $busPhone;
		protected $email;

		public function __construct($id, $fname, $lname, $phone, $email){
			$this->id = $id;
			$this->firstName = $fname;
			$this->lastName = $lname;
			$this->busPhone = $phone;
			$this->email = $email;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getFullName() {
			return $this->firstName . " " . $this->lastName;
		}

		public function setFirstName($fname) {
			$this->firstName = $fname;
		}

		public function getFirstName() {
			return $this->firstName;
		}

		public function setLastName($lname) {
			$this->lastName = $lname;
		}

		public function getLasttName() {
			return $this->lastName;
		}

		public function setBusPhone($bphone) {
			$this->busPhone = $bphone;
		}

		public function getBusPhone() {
			return $this->busPhone;
		}

		public function setEmail($email) {
			$this->email = $email;
		}

		public function getEmail() {
			return $this->email;
		}
	}

	class Customer extends Person {

		protected $address;
		protected $city;
		protected $prov;
		protected $postal;
		protected $country;
		protected $homePhone;
		protected $agentId;

		public function __construct($id, $fname, $lname, $add, $city, $prov, $post, $country, $hphone, $bphone, $email, $agtId) {
			
			parent::__construct($id, $fname, $lname, $bphone, $email);
			
			$this->address = $add;
			$this->city = $city;
			$this->prov = $prov;
			$this->postal = $post;
			$this->country = $country;
			$this->homePhone = $hphone;
			$this->agentId = $agtId;
		}

		public function getAddress() {
			return $this->address;
		}

		public function setAddress($add) {
			$this->address = $add;
		}

		public function getCity() {
			return $this->city;
		}

		public function setCity($city) {
			$this->city = $city;
		}

		public function getProv() {
			return $this->prov;
		}

		public function setProv($prov) {
			$this->prov = $prov;
		}

		public function getPostal() {
			return $this->postal;
		}

		public function setPostal($post) {
			$this->postal = $post;
		}

		public function getCountry() {
			return $this->country;
		}

		public function setCountry($country) {
			$this->country = $country;
		}

		public function getHomePhone() {
			return $this->homePhone;
		}

		public function setHomePhone($phone) {
			$this->homePhone = $phone;
		}

		public function getAgentId() {
			return $this->agentId;
		}

		public function setAgentId($id) {
			$this->agentId = $id;
		}

		public function __toString() {
			return parent::getFullName();
		}
	}



?>