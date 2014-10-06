<?php
	class Pin{
		public $description;
		public $gpioNumber;
		public $value;
		function __construct($description, $number)
		{
			$this->description = $description;
			$this->number = $number;
		}
		//saves the pin to the XML File
		function save()
		{

		}
		function getAll()
		{

		}
	}

?>