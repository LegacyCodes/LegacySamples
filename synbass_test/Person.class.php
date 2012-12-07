<?php
namespace examples\tools;

class Person{
	private $FirstName;	// variable to hold a first name
	private $SurName;	// variable to hold a Last name
	private $Age = null;	// variable to hold an age, right now set to null
	
	private $_Nin = null;	// variable to hold a private number, right now set to null
	
	public function __construct($name,$surname){	// when the class gets instantiated it will
		$this->FirstName = $name;					// require two variables $name and $surname
		$this->SurName = $surname;					// then it will make var $FirstName = $name
	}												// and $SurName = $surname
	
	private function CheckNin(){	// Checks the private number depending on User's name
		return($this->FirstName !=        ) ? $this->_Nin =  : $this->_Nin =       ; 
	}		// if var $firstname doesn't equal to Sergio then it assigns 8302691 else 960325648
	
	protected function SayHello(){		// Greets the User and assings an id based on User's Name
					.$this->CheckNin().	 ;
	}
	
	/*public static function StatFunc(){  // Static function mainly for testing 
		echo "I am static function<br/>";
	}*/	
	
	public function __destruct(){}	// Destroys the construct	
}

class Name extends Person{
	public function __construct($name,$surname){	 // when the class gets instantiated it will
		parent::__construct($name, $surname);		// ask for to variables and the parent class
		echo (!empty($name)) && (!empty($surname)) ? $this->
	}	// gets instatiated then it checks if both require variables have been filled out else
		// a prompt asking the user to enter the correct values for the variables.
}

//$person = new Name("Sergio","Lema");	// instantiated Name and give the values to the variables





