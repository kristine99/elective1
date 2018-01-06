<?php 	
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'setter');
	// initialize variables
	$client = "";
	$date = "";
	$physician = "";
	$time = "";
	$query ="";
	$update = false;
	$result1 = "";
	$result2 = "";
	$result3 = "";

	if (isset($_POST['submit'])) {
		$physician = $_POST['physician'];
		$client = $_POST['user'];
		$date = $_POST['date'];
		$time = $_POST['time'];		
		$result1 = mysqli_query($db,"SELECT * FROM client where client.physName = '$physician' ;"); 
		$result2 = mysqli_query($db,"SELECT * FROM client where client.sched = '$date' ;");
		$result3 = mysqli_query($db,"SELECT * FROM client where client.time = '$time' ;");
		if(mysqli_num_rows($result1) > 0 &&  mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) > 0){
			$_SESSION['message'] = "Appointment is already taken";
		    header('location: index.php');
		}
		else{
			mysqli_query($db, "INSERT INTO client (userName,physName,time,sched) VALUES ('$client','$physician','$time','$date');"); 
			$_SESSION['message'] = "Appointment Made"; 
			header('location: index.php');	
			       		
		}
		} 
	if (isset($_POST['doneEdit'])) {
		$physician = $_POST['physician'];
		$client = $_POST['user'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$id = $_POST['id'];
		$result1 = mysqli_query($db,"SELECT * FROM client where client.physName = '$physician' ;"); 
		$result2 = mysqli_query($db,"SELECT * FROM client where client.sched = '$date' ;");
		$result3 = mysqli_query($db,"SELECT * FROM client where client.time = '$time' ;");
		if(mysqli_num_rows($result1) > 0 &&  mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) > 0){
			$_SESSION['message'] = "Appointment is already taken";
		    header('location: index.php');
		}
		else{
			mysqli_query($db, "UPDATE client set userName='$client',physName='$physician',time='$time',sched='$date' WHERE userID='$id';"); 
			$_SESSION['message'] = "Appointment Made"; 
			header('location: index.php');				       		
		}
		}
	if (isset($_POST['delete'])) {
			$id = $_POST['currentid'];
			mysqli_query($db, "DELETE FROM client where client.userID='$id';"); 
			$_SESSION['message'] = "Deleted";
			header('location: index.php');
	} 

	?>