<?php

class Navigation extends Eloquent
{

	protected  $table = 'navigation';

	public function get_values(){
		print_r($table);
		return $this->db->get($table);
	}

}
