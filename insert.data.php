<!DOCTYPE html>
<html>
<head>
	<title>form</title>

	<link href='insert.css' rel='stylesheet' type="text/css">
</head>
<body>
		
			<main>
				<H1> INSERT YOUR ELECTRONICS DETAILS HERE</H1>
			
				<form id="main" action="insert.php" method="POST">
					
					<div id="body">
						<div id="bd">
							<label id="app" for="appliance" > APPLIANCE TYPE:</label>
							<input id="elec" type="text" name="electronics" placeholder="ELECTRONICS">
						</div>

						<div id="bd" >
							<label id="watt" for="wattage" > WATTAGE:</label>
							<input id="wt" type="number" name="watts" placeholder="WATTS">
						</div>

						<div>
							<button name="submit" class="button">INSERT</button>
						</div>
					</div>
							
				</form>
			</main>
		
</body>
</html>