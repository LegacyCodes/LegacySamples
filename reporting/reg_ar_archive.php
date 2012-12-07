<?php

class Register{
		private $_username;
		private $_password;
		private $_encryp;
		private $_email;
		
		private $_errors;
		private $_token;
		
		public function __construct(){
			$this->_errors = array();
			
			$this->_username = $this->_filter($_POST[   ]);
			$this->_password = $this->_filter($_POST[     ]);
			$this->_email = $this->_filter($_POST[   ]);
			$this->_token = $_POST[   ];
			
			$this->_passmd5 = md5($this->_password);
		}
		
		public function process()
		{
			if($this->_valid_token() && $this->_valid_data())
				$this->_register();
			return count($this->_errors)? 0 : 1;
		}
		
		private function _filter($variable)
		{
			$pattern = '                               ';
			$replacement = '';
			$subject = $variable;
			return preg_replace($pattern, $replacement, $subject);
		}
		
		private function _register()
		{
			?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<h3>Success</h3>
			<div class="grip">
			<p>An Email has been send to <?php $this->_email ?></p><br/>
			<p>Your Username is going to be <?php $this->_username ?> and your password is going to be <?php $this->_password ?></p>
			<br/><p>Thank you!</p>
			</div>
			<?php
		}
		
		public function show_errors()
		{
			
			foreach($this->_errors as $key => $value)
				$value.        ;
		}
		
		private function _valid_data()
		{
			$p = "^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$";
			if(empty($this->_username))
				$this->_errors[] = 'Invalid Username';
			if(empty($this->_password))
				$this->_errors[] = 'Invalid Password';
			if(empty($this->_email) || !filter_var($this->_email, FILTER_VALIDATE_EMAIL))
				$this->_errors[] = 'Invalid Email';
			
			return count($this->_errors)? 0 : 1;		
		}
		
		private function _valid_token()
		{
			if(!isset($_SESSION['token']) || $this->_token != $_SESSION['token'])
				$this->_errors[] = 'Invalid Submission';
			
			return count($this->_errors)? 0 : 1;
		}
		
		
	}
