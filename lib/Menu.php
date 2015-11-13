<?php

	/**
	* Menu : generates a menu for the web page
	*
	* @package 		lib
	* @subpackage	constructs
	* @author 		A. Lorman
	**/

	class Menu{

		private $links=array();

		public function __construct($links){
			$this->links=$links;
		}

		public function show(){
			echo "<ul>";
			foreach($this->links as $key => $url){
				echo "<li>"."<a href='".$url."'>".$key."</a></li>";
			}
			echo "</ul>";
		}

	}

?>