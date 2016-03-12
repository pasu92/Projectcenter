<?php

class File {

	public function __construct($id, $name, $filetype, $description, $uploadtime, $owner_id){
		$this->id = $id;
		$this->name = $name;
		$this->filetype = $filetype;
		$this->description = $description;
		$this->uploadtime = $uploadtime;
		$this->owner_id = $owner_id;
	}

	private $id;
	private $name;
	private $filetype;
	private $description;
	private $uploadtime;
	private $owner_id;

	public function new_file(){
		// TODO: implement here
	}

	public function edit_file(){
		// TODO: implement here
	}

	public function delete_file(){
		// TODO: implement here
	}

  public function list_file(){
    // TODO: implement here
  }
	
	public function get_id(){
		return $this->id;
	}

	public function get_name(){
		return $this->name;
	}

	public function set_name($name){
		$this->name = $name;
	}

	public function get_filetype(){
		return $this->filetype;
	}

	public function set_filetype($filetype){
		$this->filetype = $filetype;
	}

	public function get_description(){
		return $this->description;
	}

	public function set_description($description){
		$this->description = $description;
	}

	public function get_uploadtime(){
		return $this->role;
	}

	public function set_uploadtime($uploadtime){
		$this->uploadtime = $uploadtime;
	}

	public function get_owner_id(){
		return $this->owner_id;
	}
}

?>