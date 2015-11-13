<?php

	/**
	* Header : generates the header for the web page
	*
	* @package 		lib
	* @subpackage	constructs
	* @author 		A. Lorman
	**/

	class Header{

		private $title;
		private $logo;
		private $css;

		public function __construct($title,$logo,$css){
			$this->title=$title;
			$this->logo=$logo;
			$this->css=$css;
		}

		public function show(){
			$html = LAYOUT.$this->css.'</style></head><body>';
			echo $html;
			echo "<header><h1><img src='".$this->logo."' height='25px' />    ".$this->title."</h1></header>";
		}

	}

?>