setStatus();

function setStatus()
{
	$.each(pins, function( i, pin ) {
		if(pin.statusPin.normalValue == pin.statusPin.value)
		{
			$("#normal" + pin.gpioNumber).show();
		}
		else
		{
			$("#offNormal"+ pin.gpioNumber).show();
		}
	});
}