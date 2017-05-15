<?php
require_once __DIR__.'/solutions/fundamentals.php';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>CodeWars</title>
</head>
<body>
	<div class="w3-container">
		<h2 class="w3-center">Solusions</h2>

		<div class="w3-panel ">
			<?php show($_SERVER['REQUEST_URI'], 'vd'); ?>			
		</div>
	</div>
</body>
</html>