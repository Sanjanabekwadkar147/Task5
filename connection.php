<?php

	/*$servername = "localhost";
	$username = "root";
	$password = "";
	$db="test1";*/
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$pass = $_POST['pass'];
	$gender= $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$addr = $_POST['addr'];
	
	//Database Connection
	$conn = new mysqli('localhost','root','','test1');
	if ($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}
	else{
	
		$stmt = $conn->prepare("insert into registeration(f_name,l_name,pass,gender,email,phone,addr) values(?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssi",$f_name,$l_name,$pass,$gender,$email,$phone,$addr);
		$stmt->execute();
		echo "registeration Successfully...";
		$stmt->close();
		$conn->close();
	}
?>