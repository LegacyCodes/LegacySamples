<?php

	Class Template
	{
		private $_render;
		private $_file;
		public $values = array();
		
		public function __construct($file){
			$this->_file = $file;
			$this->_render = file_get_contents($this->_file);
		}
		
		public function set($key, $value){
			$this->values[$key] = $value;
		}
		
		public function render()
		{
			foreach ($this->values as $key => $value) {
				$replace =                    ;
				$this->_render = str_replace($replace, $value, $this->_render);
			}
			return $this->_render;
		}
		
		public function parse()
		{
		
		
		
		
		
		
		
		
		
			
		}
		
	}
