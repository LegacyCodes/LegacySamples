<?php
namespace source\bundle\bin\reporting;
class ErrorReporting{
	public function __construct(){}
	protected $_Errors = array();
	
	protected function ErrorReportingMessage(){
		foreach($this->_Errors as $k => $v){
			 print $v.'<br/>';
		}
	}
}
