<?php

	/**
	* Page : generates a web page
	*
	* @package		lib
	* @subpackage	constructs
	* @author 		A. Lorman
	**/

	class Page{

		private $header;
		private $menu;
		private $content;
		private $footer;

		public function __construct($title,$logo,$css,$links,$article,$foot){
			$this->header = new Header($title,$logo,$css);
			$this->menu = new Menu($links);
			$this->content = new Content($article);
			$this->footer = new Footer($foot);
		}

		public function show(){
			$this->header->show();
			$this->menu->show();
			$this->content->show();
			$this->footer->show();
		}

	}

?>