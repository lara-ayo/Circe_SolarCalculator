<?php
include 'datab.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['electronicId']) && !empty($_POST['electronicId'])) {
	$electronicId = $_POST['electronicId'];
	
	$sql = "SELECT * FROM watts WHERE electronics_id = '$electronicId' LIMIT 1";
	$result = $conn->query($sql);
	$rowCount = $result->num_rows;

	if ($rowCount > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "<option value='".$row['id']."'>".$row['power_consumption']."</option>";
		}
	} else {
		echo '<option value="">Watts Data Not Availabe</option>';
	}
}


?>