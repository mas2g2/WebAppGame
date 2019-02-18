<?php
/*
        name : Milesh Shah
        date : 12/07/2018
        pawprint : mas2g2
*/
	/*if(isset($_COOKIE["UnmatchingPass"]){
		setcookie("UnmatchingPass",1,time()-3600);		
	}*/
	$servername = "ip-172-31-37-56";
	$db_username = "miles";
	$db_password = "12345";
	$dbname = "Players";		
	$conn = new mysqli($servername,$db_username,$db_password,$dbname);
		
	if($conn->connect_error){
		die("Connection failed : " . $conn->connect_error);
	} else {
		echo "Connected successfully\n";
		$username = $_POST["username"];
		$password = $_POST["password"];
		$repassword = $_POST["re-password"];
		if($password != $repassword){
			header("location:createAcc.php?createAcc=false");
				
		}
		else{
	
			$name = $_POST["name"];
			$email = $_POST["email"];
			echo $username;
			echo $password;
			echo $name;
			$sql = "SELECT COUNT(*) as newId FROM Players";
			$result = $conn->query($sql);
			$id = $result->fetch_assoc();
			$id = $id['newId'] + 1;
			$sql = "INSERT INTO Players Values ('$username','$password','$id','$email','$name',0)";
			if($conn->query($sql) === TRUE){
				header("location:index.php");		
			} else{
				header("location:createAcc.php?newUser=false");
				
			}
		}
	}
?>
