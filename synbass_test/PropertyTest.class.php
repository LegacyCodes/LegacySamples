<?php
class PropertyTest{
	private $Data = array(); // variable type: array
		
	public function __construct(){
		echo __CLASS__ . " was created<br/>"; // tell the class Name 
	}
	public function __destruct(){
		echo __CLASS__ . " was destroyed";	// tell when the class is destroy
	}
	public function __set($name, $value){			// setting two variables $name, $value
		echo " Setting '$name' to '$value'<br/>";	// making $name have the value of $value
		$this->Data[$name] = $value;				// creating an array of $Data [$name]	
	}
	public function __get($name){			// retrieve $name
		echo "Getting '$name' = ";			// $name = $value but is the $Data[$name]
		
		return $this->Data[$name]."<br/>"; /*? array_key_exists($name, $this->Data) : 
		$trace = debug_backtrace() && 
		trigger_error("Undefined property via __get() '$name' in '$trace[0]['file']' 
		on line '$trace[0]['line'], E_USER_NOTICE'") && null;*/
	}
	public function __isset($name){
		echo "{Is '$name' set} : ";
		return isset($this->Data[$name]);
	}
	public function __unset($name){
		echo "{Unsetting '$name'}<br/>";
		unset($this->Data[$name]);
	}
}




