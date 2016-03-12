<?php

class User {
	
	protected $id;
	protected $firstname;
	protected $lastname;
	protected $username;
	protected $password;
	protected $email;
	protected $tel;
	protected $adress;
	protected $zip;
	protected $city;
	protected $file_id;

	public function __construct($id, $firstname, $lastname, $username, $password, $email, $tel, $adress, $zip, $city){
		$this->id = $id;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->password = $password;
		$this->email = $email;
		$this->tel = $tel;
		$this->adress = $adress;
		$this->zip = $zip;
		$this->city = $city;
	}
	
	public function edit_user(){
			// TODO: implement here
	}
	
	public function delete_user(){
			// TODO: implement here
	}
	
	public function list_user(){
			// TODO: implement here
	}
	
	public function get_id(){
		return $this->id;
	}

	public function get_firstname(){
		return $this->firstname;
	}

	public function set_firstname($firstname){
		$this->firstname = $firstname;
	}

	public function get_lastname(){
		return $this->lastname;
	}

	public function set_lastname($lastname){
		$this->lastname = $lastname;
	}

	public function get_username(){
		return $this->username;
	}

	public function set_username($username){
		$this->username = $username;
	}

	public function get_password(){
		return $this->password;
	}

	public function set_password($password){
		$this->password = $password;
	}

	public function get_email(){
		return $this->email;
	}

	public function set_email($email){
		$this->email = $email;
	}

	public function get_tel(){
		return $this->tel;
	}

	public function set_tel($tel){
		$this->tel = $tel;
	}

	public function get_adress(){
		return $this->adress;
	}

	public function set_adress($adress){
		$this->adress = $adress;
	}

	public function get_zip(){
		return $this->zip;
	}

	public function set_zip($zip){
		$this->zip = $zip;
	}

	public function get_city(){
		return $this->city;
	}

	public function set_city($city){
		$this->city = $city;
	}

	public function get_file_id(){
		return $this->file_id;
	}

	public function set_file_id($file_id){
		$this->file_id = $file_id;
	}	
	
}

?>