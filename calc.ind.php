<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname= "solar_app";

//Open a new connection to the MySQL server
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `electronics`  WHERE id=''" ;

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
     //output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
        if ($result= 1 ){
        	$appliance = '<option>'.$row['elect_type'].'</option>';
        	$watts = '<option>'.$row['power_consumption'].'</option>';
        }
       
   }
   

} 

if (isset($_POST["submit"])) {
	
$wtt1	= $_POST["wtt1"];
$qty1 	= $_POST["qty1"];	
$hrd1	= $_POST["hrd1"];
$wth1	= $_POST["wth1"];
$wth1	= $wtt1 * $qty1 * $hrd1;

$wtt2	= $_POST["wtt2"];
$qty2 	= $_POST["qty2"];	
$hrd2	= $_POST["hrd2"];
$wth2	= $_POST["wth2"];
$wth2	= $wtt2 * $qty2 * $hrd2;

$wtt3	= $_POST["wtt3"];
$qty3 	= $_POST["qty3"];	
$hrd3	= $_POST["hrd3"];
$wth3	= $_POST["wth3"];
$wth3	= $wtt3 * $qty3 * $hrd3;

$wtt4	= $_POST["wtt4"];
$qty4 	= $_POST["qty4"];	
$hrd4	= $_POST["hrd4"];
$wth4	= $_POST["wth4"];
$wth4	= $wtt4 * $qty4 * $hrd4;

$wtt5	= $_POST["wtt5"];
$qty5 	= $_POST["qty5"];	
$hrd5	= $_POST["hrd5"];
$wth5	= $_POST["wth5"];
$wth5	= $wtt5 * $qty5 * $hrd5;

//calculating total load
$tpower = $wth1 + $wth2 + $wth3 + $wth4 + $wth5;

//solar energy available for 6 hours of sunlight
$solarp = $tpower/6; 

//batter capacity in amphere hours
$batt = $tpower/12;

//echo  "total watts consume per day is " .$tpower. "watts";

//echo  "solar power per day is " .$solarp. "watts";


}

?> 
	<main>
	<form method="POST">
			<div style=" border: solid; padding: 10px; margin : 10px; float: left; ">
			<p>electronic type</p>

				<select>
					<?php
					$sql = "SELECT * FROM `electronics`";

					$result = mysqli_query($conn, $sql);

				    while($row = mysqli_fetch_assoc($result)) {
				        
				        echo '
				        <option>'.$row['elect_type'].'</option>

					   ';
					   }
					   ?>
				   	
			   </select>
				<p>power consumption (in watt)</p>
				<select name="wtt1">
					<?php
					$sql = "SELECT * FROM `electronics`";

					$result = mysqli_query($conn, $sql);

			    	while($row = mysqli_fetch_assoc($result)) {
			        
			        echo '
			        <option>'.$row['power_consumption'].'</option>

			   		';
			   		}
			   		?>
		   	
		   </select>

				<p>quantity</p>
				<input type="number" name="qty1" required="" placeholder="quantity">

				<p>Hours On per Day</p>
				<input type="number" name="hrd1" required="" placeholder="Hours On per Day">

				<p>watt Hours per Day</p>
				<input type="number" name="wth1" value="<?php echo $wth1 ?>" placeholder="watt Hours per Day">
			</div>

			<div style=" border: solid; padding: 10px; margin : 10px; float: left;">
				<p>electronic type</p>
				<select><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['elect_type'].'</option>

		   ';
		   }
		   ?></select>

				<p>power consumption (in watt)</p>
				<select name="wtt2"><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['power_consumption'].'</option>

		   ';
		   }
		   ?></select>

				<p>quantity</p>
				<input type="number" name="qty2" required="" placeholder="quantity">

				<p>Hours On per Day</p>
				<input type="number" name="hrd2" required="" placeholder="Hours On per Day">

				<p>watt Hours per Day</p>
				<input type="number" name="wth2" value="<?php echo $wth2 ?>" placeholder="watt Hours per Day">
			</div>


			<div style=" border: solid; padding: 10px; margin : 10px; float: left;">
				<p>electronic type</p>
				<select><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['elect_type'].'</option>

		   ';
		   }
		   ?></select>

				<p>power consumption (in watt)</p>
				<select name="wtt3"><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['power_consumption'].'</option>

		   ';
		   }
		   ?></select>


				<p>quantity</p>
				<input type="number" name="qty3" required="" placeholder="quantity">

				<p>Hours On per Day</p>
				<input type="number" name="hrd3" required="" placeholder="Hours On per Day">

				<p>watt Hours per Day</p>
				<input type="number" name="wth3" value="<?php echo $wth3 ?>" placeholder="watt Hours per Day">
			</div>

			<div style=" border: solid; padding: 10px; margin : 10px; float: left;">
				<p>electronic type</p>
				<select><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['elect_type'].'</option>

		   ';
		   }
		   ?></select>

				<p>power consumption (in watt)</p>
				<select name="wtt4"><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['power_consumption'].'</option>

		   ';
		   }
		   ?></select>


				<p>quantity</p>
				<input type="number" name="qty4" required="" placeholder="quantity">

				<p>Hours On per Day</p>
				<input type="number" name="hrd4" required="" placeholder="Hours On per Day">

				<p>watt Hours per Day</p>
				<input type="number" name="wth4" value="<?php echo $wth4 ?>" placeholder="watt Hours per Day">
			</div>

			<div style=" border: solid; padding: 10px; margin : 10px; float: left;">
				<p>electronic type</p>
				<select><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['elect_type'].'</option>

		   ';
		   }
		   ?></select>

				<p>power consumption (in watt)</p>
				<select name="wtt5"><?php
			$sql = "SELECT * FROM `electronics`";

			$result = mysqli_query($conn, $sql);

		    while($row = mysqli_fetch_assoc($result)) {
		        
		        echo '
		        <option>'.$row['power_consumption'].'</option>

		   ';
		   }
		   ?></select>


				<p>quantity</p>
				<input type="number" name="qty5" required="" placeholder="quantity">

				<p>Hours On per Day</p>
				<input type="number" name="hrd5" required="" placeholder="Hours On per Day">

				<p>watt Hours per Day</p>
				<input type="number" name="wth5" value="<?php echo $wth5 ?>" placeholder="watt Hours per Day">
			</div>

			

			<div style="  ">
			<h2>total watts consume per day (watts)</h2>
				<input type="" name="" value="<?php echo $tpower ?>" placeholder= "watts">	
			
			
			
			<h2>solar power per day (watts)</h2>
				<input type="" name="" value="<?php echo $solarp ?>" placeholder= "watts">

			<h2>batter capacity in amphere hours</h2>
				<input type="" name="" value="<?php echo $batt ?>" placeholder="amphere Hours" >		
			</div>

			<div>
				<button name="submit">calculate</button>
			</div>
			

	</form>
	</main>

</body>
</html>