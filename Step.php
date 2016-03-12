<?php

class Step extends Masterproject {

	private $project_id;

	public function __construct($id, $name, $description, $start, $end, $owner_id, $project_id) {
		parent::__construct($id, $name, $description, $start, $end, $owner_id);
		$this->project_id = $project_id;
	}		
	
	public function assign_step(){
		// TODO: implement here
	}

	public function remove_step(){
		// TODO: implement here
	}
	
	public function get_project_id(){
		return $this->project_id;
	}
	
}

?>