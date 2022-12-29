<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender= $_POST['gender'];
  $email= $_POST['email'];
  $password=$_POST['password'];
  $number=$_POST['number'];




  $conn=new mysqli('localhost','root','','register');
  if ($conn->connect_error) {
  	echo "$conn->connect_error";
  	die('Connection failed  :'.$conn->connect_error);
  }
  else{
  	$stmt=$conn->prepare("insert into registration(First_name, Last_name, Gender, email, Password, mobile) values(?,?,?,?,?,?)");
  	$stmt->bind_param("sssssi",$fname, $lname, $gender, $email, $password, $number);
  		
		
		echo "Registration successfully...";
		$stmt->execute();
		 $stmt->close();
		$conn->close();
		

	}
	   
 ?>