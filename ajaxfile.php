<?php 

include "config.php";

$request = 2;

// Read $_GET value
if(isset($_GET['request'])){
	$request = $_GET['request'];
}

// Fetch records 
if($request == 1){

	// Select record 
	$sql = "SELECT * FROM employee";
	$employeeData = mysqli_query($con,$sql);
	$response = array();
	while($row = mysqli_fetch_assoc($employeeData)){
		$response[] = array(
			"id" => $row['id'],
			"emp_name" => $row['emp_name'],
			"salary" => $row['salary'],
			"email" => $row['email'],
		);
	}

	echo json_encode($response);
	exit;
}

// Insert record
if($request == 2){

	// Read POST data
	$data = json_decode(file_get_contents("php://input"));
	$name = $data->name;
	$salary = $data->salary;
	$email = $data->email;

	// Insert record
	$sql = "insert into employee(emp_name,salary,email) values('".$name."',".$salary.",'".$email."')";
	if(mysqli_query($con,$sql)){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}