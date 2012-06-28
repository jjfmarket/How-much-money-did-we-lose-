<?php
class Culprits
{
	static $culprits = array(
		'SNAPI',
		'Ztrack',
		'ZMC',
		'City Express',
		'Facebook',
		'QA',
		'City PM',
		'SVN',
		'a virus',
		'City Producers',
		'CS',
		'SEG',
		'SRE',
		'Parik',
		'Westrom',
		'Reid',
		'Bill',
		'Devlin',
		'Matt Alberts',
		'Jason',
		'Igor',
		'Jdao',
		'Techpod',
		'Interns',
	);
	
	private $numCulprits;
	
	public function __construct(){
		$this->numCulprits = count(self::$culprits) -1;
	}
	
	function getOne(){
		$index = rand(0, $this->numCulprits);
		return self::$culprits[$index];
	}
}
