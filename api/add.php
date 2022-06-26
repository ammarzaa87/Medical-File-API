<?php
header("Access-Control-Allow-Origin: *");
	include 'connection.php';
	
	if(isset($_POST['pass'])) {
		$hash = hash('sha256', $_POST['pass']);
		$sql1 = "SELECT * FROM user where hash=?";
		$stmt1 = $connection->prepare($sql1);
		$stmt1->bind_param("s",$hash);
		$stmt1->execute();
		$result = $stmt1->get_result();
		$row = $result->fetch_assoc();
		
		
		if(!empty($row)){
			$user_id = $row['id'];
			if(isset($_POST['ssn'])) {
			$ssn=$_POST['ssn'];
			}else{
				die ("Enter a valid input");
			}
			if(isset($_POST['doctor_nb'])) {
				$doctor=$_POST['doctor_nb'];
			}else{
				die ("Enter a valid input");
			}
			if(isset($_POST['date'])) {
				$date = $_POST['date'];
			}else{
				die ("Enter a valid input");
			}
			if(isset($_POST['dia'])) {
				$dia = $_POST['dia'];
			}else{
				die ("Enter a valid input");
			}
			if(isset($_POST['presc'])) {
				$presc = $_POST['presc'];
			}else{
				die ("Enter a valid input");
			}
			
			
			
			$sql = "INSERT INTO `file`(`user_id` ,`patient_ssn`,`doctor_nb`,`date`,`overall_diagnosis`,`prescription`) 
			VALUES ('$user_id','$ssn','$doctor','$date','$dia','$presc')";
			
			

			if (mysqli_query($connection, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
			mysqli_close($connection);
		}
		else{
			echo json_encode(array("statusCode"=>"authentication error"));
		}
		
	
	}
	else{
		echo json_encode(array("statusCode"=>"you must be authenticated"));
	}
?>