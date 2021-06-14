<?php 

include "config.php";

$request = 2;

if(isset($_GET['request'])){
	$request = $_GET['request'];
}

if($request == 1){

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

if($request == 2){

	$data = json_decode(file_get_contents("php://input"));
	$name = $data->name;
	$salary = $data->salary;
	$email = $data->email;

	$sql = "insert into employee(emp_name,salary,email) values('".$name."',".$salary.",'".$email."')";
	if(mysqli_query($con,$sql)){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}