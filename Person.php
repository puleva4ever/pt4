<?php

	class Person{

		private $nom;
		private $edat;

		public function __construct($nom,$edat){	
			$this->nom=$nom;
			$this->edat=$edat;
		}

		public function print(){
			echo "Nombre: ".$nom;
		}

	}


?>