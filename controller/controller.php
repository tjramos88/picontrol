
<?php
	//this module is responsible for handling the AJAX requests from index.php. It will build the appropriate Pin objects depending on what index.php requests
	function __autoload($class_name) {
    	require "../classes/$class_name.php";
	}
	require('config.php');
	$pins = array();
	
	foreach($xmlConfig->pin as $pin)
	{
		//check if type is status or control
		if($pin->config['type'] == "control")
		{
			$newControlPin = createControlPin($pin);
			array_push($pins, $newControlPin);

		}
		else
		{
			//create the statusControlPin
		}
		
	}

	function createControlPin($pin)
	{
		$newControlPin = new ControlPin((string)$pin->description,(int)$pin->gpioNumber);
		$newControlPin->controlType = (string) $pin->config->commandType;
		$newControlPin->commandValue = (int)$pin->config->controlValue;
		$newControlPin->statusPin = createStatusPin($pin->config->statusPin);

		return $newControlPin;
	}

	function createStatusPin($pin)
	{
		
		$newStatusPin = new StatusPin(
			(string)$pin->description,
			(int)$pin->gpioNumber,
			(int)$pin->config->normalValue,
			(string)$pin->config->normalText,
			(int)$pin->config->offNormalValue,
			(string)$pin->config->offNormalText
		);
			$newStatusPin->getStatus();
		return $newStatusPin;
	}
?>