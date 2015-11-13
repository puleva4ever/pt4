<?php

	/**
	* Content : generates the content for the web page
	*
	* @package 		lib
	* @subpackage	constructs
	* @author 		A. Lorman
	**/

	class Content{

		private $article;

		public function __construct($article){
			$this->article=$article;
		}

		public function show(){
			echo "<h2>".$this->article."</h2>";
		}

	}

?>