<?php

require ('MyAbstractClass.php');
require ('MyInterspace.php');

class MyClass extends MyAbstractClass implements MyInterface {
	
	private $message = array();
	
	public function __construct () {
		$this->methodTwo("message", "WW91IGRpZCBpdCEKCg==");
	}
	
	protected function hello () {
		return $this->myAbstractMethod();
	}
	
	private function getMessage() {
		$_message = $this->methodOne("message");
		return base64_decode($message);
	}

}