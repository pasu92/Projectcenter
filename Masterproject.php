<?php

class Masterproject {

	protected $id;
	protected $name;
	protected $description;
	protected $start;
	protected $end;
	protected $owner_id;
	protected $files;

	public function __construct($id, $name, $description, $start, $end, $owner_id) {
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->start = $start;
		$this->end = $end;
		$this->owner_id = $owner_id;
	}
	
	public function edit(){
			// TODO: implement here
	}

	public function list_all(){
			// TODO: implement here
	}

	public function assign_employees(){
			// TODO: implement here
	}

	public function remove_employees(){
			// TODO: implement here
	}

	public function assign_file(){
			// TODO: implement here
	}

	public function remove_file(){
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

	public function get_description(){
		return $this->description;
	}

	public function set_description($description){
		$this->description = $description;
	}

	public function get_start(){
		return $this->start;
	}

	public function set_start($start){
		$this->start = $start;
	}

	public function get_end(){
		return $this->end;
	}

	public function set_end($end){
		$this->end = $end;
	}

	public function get_owner_id(){
		return $this->owner_id;
	}

	public function get_files(){
		return $this->files;
	}

	public function set_files($files){
		$this->files = $files;
	}		
		
}

