<?php

require_once 'culprits.php';
require_once 'incidents.php';
require_once 'moneys.php';

class HowMuch
{

	private $viewData;
	public function __construct(){
		$culprits = new Culprits();
		$incidents = new Incidents();
		$moneys = new Moneys();
		
		$this->viewData = 'Oh no! ' .
		$incidents->getOne() . 
		' caused by ' .
		$culprits->getOne() . 
		' cost us ' . 
		rand(1,999) . 
		' ' . 
		$moneys->getOne() .
		'!';
	}
	
	public function view(){
		return $this->viewData;
	}
}
?>