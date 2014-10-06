<?php
	class StatusPin extends Pin
	{
		public $normalValue;
		public $normalText;
		public $offNormalValue;
		public $offNormalText;

		function __construct($description, $number, $normalValue, $normalText, $offNormalValue, $offNormalText)
		{
				$this->description = $description;
				$this->gpioNumber = $number;
				$this->normalValue = $normalValue;
				$this->normalText = $normalText;
				$this->offNormalValue = $normalValue;
				$this->offNormalText = $offNormalText;
		}
		function isNormal()
		{
			//get the value for the statusPin
			$this->value = 0;
			if($this->normalValue === $this->value)
				return true;
			else
				return false;
		}
		function getStatus()
		{
			$this->value =1;

		}
	}

?>