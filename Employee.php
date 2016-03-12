<?php

class Employee extends User {
	
	private static $id_counter = 0;
  private $role;
		
	public function __construct(User $user, $role) {
		self::$id_counter++;
		//var_dump($user);
		$attributes = get_object_vars($user);
		foreach ($attributes as $attribute => $value ) {
			if ($attribute == 'id') {
				continue;
			}
			$this->$attribute = $value;
		}
		$this->id = self::$id_counter;
		$this->role = $role;
	}		
	
	public function get_role(){
		return $this->role;
	}

	public function set_role($role){
		$this->role = $role;
	}	
	
}

?>