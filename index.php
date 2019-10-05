<!DOCTYPE html>
<?php
		include 'datab.php';
	// Check connection
		if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	 <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
	<title>Circe Solar Calculator</title>
	<link href='./main.css' rel='stylesheet' type="text/css">
</head>

<body>
	
	<h1 id="logo">CIRCE</h1>
	<div class="text-center">
		<h1>Solar Calculator App</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<h3>How much solar power do you need?</h3>
					</div>
				</div>
			</div>
			<div class="alert">
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				Hi Circe user, to get your power consumption(watt) check the wattage label at the back or bottom of your device.
			</div>
			<div class="col-sm-7">
				<form>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label for="electronic type"> Electronic Type:</label>
								<select id="appliance" name="electronics" class="form-control">
										<option value="">Select Electronic</option>
					
										<!-- insert the data into the select element -->
										<?php
											$sql = "SELECT * FROM `electronics`";
											$result = $conn->query($sql);
											$rowCount = $result->num_rows;
					
											if ($rowCount > 0) {
												while ($row = $result->fetch_assoc()) {
										?>
											<option value="<?php echo $row['id']; ?>"><?php echo $row['elect_type']; ?></option>		
										<?php } } else {
											echo "<option>Electronics Data Not Available</option>";
											} ?>
										   
								   </select>
							</div>
							<div class="col-sm-6">
								<label for="quantity"> Quantity:</label>
								<input type="number" id="numberOfappliances" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4">
								<label for="hours"> Hours of use per day:</label>
								<input type="number" min="1" max="24" id="hours" class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="power"> Power consumption (watts):</label>
									<select name="wtt1" id="watts" class="form-control">
										<option value="">Select Electronics</option>
									</select>
							</div>
							<div class="col-sm-4">
								<label for="voltage"> Battery Voltage:</label>
								<input type="number" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4">
								<label for="panel-wattage"> Solar panel wattage:</label>
								<input type="number" class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="capacity"> Battery Capacity:</label>
								<input type="number" class="form-control">
							</div>
							<div class="col-sm-4">
								<label for="sunlight"> Hours of sunlight per day:</label>
								<input type="number" min="1" max="24" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						Click Here to add to List
						<button id="add">+</button>
					</div>
				</form>
				<button id="calculate">Calculate</button>
				<div id="display"></div>
			</div>
			<div class="col-sm-5">
				<div class="container-fluid circe-display">
					<div class="text-center">
						<p>To run your household, you need:</p>
						<div class="watts-display">0kW per day</div>
					</div>
					<br>
					<br>
					<div class="text-center">
						<small><em>Powered By Circe Energy</em></small>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="app.js" type="text/javascript"></script>
<script type="text/javascript" src="html2/js/jquery.min.js"></script>
<script type="text/javascript" src="watt.js"></script>

</html>
