<?php

class testClass{
	private $lvar="";
	public function __construct($var){
		$this->lvar=$var;
	}
	
	public function say(){
		return $this->lvar;
	}
	
}

$a=new testClass("a");
$b=new testClass("b");
echo $a->say();
echo $b->say();

?>