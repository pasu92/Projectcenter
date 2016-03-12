<?php

class Project extends Masterproject {

	public function __construct($id, $name, $description, $start, $end, $owner_id) {
		parent::__construct($id, $name, $description, $start, $end, $owner_id);
	}			
	
}

?>