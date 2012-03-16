<?php
class Culprits
{
	static $culprits = array(
		'Talbot',
		'Devlin',
		'Motts',
		'Bigi',
		'Mike Williams',
		'Facebook',
		'QA',
		'Mafia PM',
		'SVN',
		'a virus',
		'Jon',
		'John',
		'CS',
		'Westrom',
		'Vlad',
		'Henry',
		'Sarah',
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
