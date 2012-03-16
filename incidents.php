<?php
class Incidents
{
	static $incidents = array(
		'A lag spike',
		'A syntax error',
		'A white screen',
		'A glitch',
		'An exploit',
		'The broken svn properties in the lib folder',
		'A flood of CS tickets',
		'A last minute spec change',
		'Popup spam',
		'An outdated CMS config',
		'An iterative data services request',
		'Some smartSVN reintegration merge slowness',
		'Intranet downtime',
		'Error logging on web7',
		'A formatting error on chrome',
		'A potential exploit',
		'A myspace consumer problem',
		'A missing phylum on a tracking call',
		'A non user facing error log',
		'A memcache connection failure',
		'An aircard VPN issue',
		'A misleading CS knowledgebase article',
		'An incomplete piggyback feature',
		'An unexpected div id change',
		'A semantic code error',
		'A disk space shortage',
		'Some incorrect banner text',
		'An API timeout',
		'A localized username',
		'An unexpected outdated xpromo curl call',
	);
	
	private $numIncidents;
	
	public function __construct(){
		$this->numIncidents = count(self::$incidents) -1;
	}
	
	function getOne(){
		$index = rand(0, $this->numIncidents);
		return self::$incidents[$index];
	}
}
?>
