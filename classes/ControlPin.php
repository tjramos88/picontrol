<?php
	class ControlPin extends Pin
	{
	    public $controlType;
		public $statusPin;
		public $controlValue;
		function __construct($description, $number)
		{
				$this->description = $description;
				$this->gpioNumber = $number;
		}
		function sendCommand()
		{
			
			$this->value = $controlValue;
			//send the control for the pin

		}
		function getGPIOValue()
		{
			//function gets the status of the GPIO pin by sending a request to the webservice
			$this->gpioNumber = 1;
		}
		//saves the control pin to the xml file
		function save()
		{

		}


	}


?>