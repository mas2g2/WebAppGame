<?php
/*
        name : Milesh Shah
        date : 12/07/2018
        pawprint : mas2g2
*/
                $username = $_POST['uname'];
                $password = $_POST['psw'];
		 $servername = "ip-172-31-37-56";
        	$db_username = "miles";
        	$db_password = "12345";
        	$dbname = "Players";
		$login = true;	
        	$conn = new mysqli($servername,$db_username,$db_password,$dbname);

       		 if($conn->connect_error){
                	die("Connection failed : " . $conn->connect_error);
        	} else {
                	//echo "Connected successfully\n";
			$sql = "SELECT * FROM Players WHERE Username = '$username' AND Password = '$password'";
			$username = $conn->real_escape_string($username);
			$password = $conn->real_escape_string($password);
			$password = sha1($password);
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				$sql = "SELECT ID FROM Players WHERE Username = '$username'";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				$id = $row["ID"];
				setcookie("ID",$id);	
				if($password == 'C0ntr@s3~aTemp' and isset($_COOKIE['Email'])){
					header("location: new_pass.php");
                        	}
				else{
				$login = true;		
				header("location:home.php");
				}
			} else {
				header("location:index.php?login=false");	
				//echo "Login Failed";	
			}
		}

?>
