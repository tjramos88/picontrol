<?php
include '../controller/controller.php';

	//load all the control and status pin from the xml file
?>
<!doctype html>
<html>
<head>
  <meta name="viewport"
  content="width=device-width,
  minimum-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/pi-door/css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/pi-door/js/gpioCommand.js"></script>
</head>
<body>

	<div class = "content">
		<div class ="main_header">PI GPIO Status</div>
		<center>
			<?php foreach($pins as $pinIndex => $pin): ?>
				<h3><?php echo $pin->description?></h3>

				<a class ="command" id ="link<?php echo $pinIndex?>" href="#" ><div class = "normal" id ="normal<?php echo $pin->gpioNumber?>"> <?php echo $pin->statusPin->normalText?> </div></a>
				<a class ="command" id ="link<?php echo $pinIndex?>" href="#" ><div class = "offNormal" id ="offNormal<?php echo $pin->gpioNumber?>"> <?php echo $pin->statusPin->offNormalText?> </div></a>

					
		<?php endforeach; ?>
		</center>							
		</div>			


</body>
<script type="text/javascript"> var pins = <?php echo json_encode($pins) ?></script>
<script src="/pi-door/js/setStatus.js"></script>
<script src="/pi-door/js/gpioCommand.js"></script>
</html>