<?php
	session_start();
	include 'connection.php';
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST["username"];
		$password = $_POST["password"];
	}
	
	$sql = "SELECT agent_password from agent where agent_id='$username'";
	$result = $conn->query($sql);        

    while($row = $result->fetch_assoc()) {
		if($password == $row["agent_password"]){
			//echo "welcome you have successfully logged in";
			
			header("Location: agent.php");
			exit();
		}
    }
	$sql = "SELECT client_password from client where client_id='$username'";
	$result = $conn->query($sql);        

    while($row = $result->fetch_assoc()) {
		if($password == $row["client_password"]){
		//	echo "welcome you have successfully logged in";
		
			header("Location: clientHome.php");
			exit();
		}
    }
	
	if(!isset($_SESSION["username"])){
		header("Location: home.php");
	}
?>