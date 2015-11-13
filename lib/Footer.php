<?php

	/**
	* Footer : generates the footer for the web page
	*
	* @package 		lib
	* @subpackage	constructs
	* @author 		A. Lorman
	**/

	class Footer{

		private $foot;

		public function __construct($foot){
			$this->foot=$foot;
		}

		public function show(){
			echo "<footer>".$this->foot."</footer>";
		}

	}

?>