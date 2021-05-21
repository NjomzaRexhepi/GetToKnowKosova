<?php

class Validator{

	public $user_id;

	function __construct(){
		//echo 'Validator constructed !\n';
	}

	function __destruct() {
        //echo "Destroying " . __CLASS__ . "\n";
    }

    public function set_user_id($user){
    	$this->user_id = $user;
    }

    public function get_user_id(){
    	return $this->user_id;
    }

    public function __set($name,$value) {
	  $functionname='set_'.$name;
	  return $this->$functionname($value);
	}
	
	public function __get($name) {
	  $functionname='get_'.$name;
	  return $this->$functionname();
	}

    public static function validateFullName($input){
        
        $reg = "/^([a-zA-Z' ]+)$/";
        
        return preg_match($reg,$input) ? true : false;
    }

     public static function validateEmail($input){
        $reg = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
        return preg_match($reg,$input) ? true : false;
    }

}

?>