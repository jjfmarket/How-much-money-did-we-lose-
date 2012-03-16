<?php
class Moneys
{
	static $moneys = array(
		'dollars',
		'thousand dollars',
		'million dollars',
		'billion dollars',
		'trillion dollars',
		'gazillion dollars',
		'dau',
		'thousand dau',
		'million dau',
		'billion dau',
		'trillion dau',
		'gazillion dau',
	);
	
	private $numMoneys;
	
	public function __construct(){
		$this->numMoneys = count(self::$moneys) -1;
	}
	
	function getOne(){
		$index = rand(0, $this->numMoneys);
		return self::$moneys[$index];
	}
}