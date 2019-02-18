<?php
/*
        name : Milesh Shah
        date : 12/07/2018
        pawprint : mas2g2
*/
	$email = $_POST["email"];
	$email = urldecode($email);
	$username = $_POST["username"];
	$servername = "ip-172-31-37-56";
        $db_username = "miles";
        $db_password = "12345";
        $dbname = "Players";
        $conn = new mysqli($servername,$db_username,$db_password,$dbname);

        if($conn->connect_error){
                die("Connection failed : " . $conn->connect_error);
        } else {
                echo "Connected successfully\n";	
		$sql = "SELECT * FROM Players WHERE Username = '$username' AND Email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows == 0){			
				
			header("Location: reset_pass.php?reset=false");
		}else{
			$tempPass = "C0ntr@s3~aTemp";
			$row = $result->fetch_assoc();
			$check = mail("mas2g2@mail.missouri.edu","Temporary Password","Your password was reset to $tempPass");
			//setcookie("Email",$row['Email']);
/*			if(@mail("mas2g2@mail.missouri.edu","Temporary Password","Your password was reset to $tempPass")){*/
			//	$email = "mas2g2@mail.missouri.edu";
				$sql = "UPDATE Players SET Password = '$tempPass' WHERE Username = '$username'";
				if($conn->query($sql) === TRUE){
					header("Location: index.php");
					setcookie("Email","sent");
				} 
/*			} else{
				
			}*/
						
		}
	}
?>
