<?php
/*
        name : Milesh Shah
        date : 12/07/2018
        pawprint : mas2g2
*/
	$score = floatval($_GET["score"]);	
	$id = floatval($_COOKIE["ID"]);
//	setcookie("ID","",time()-3600);
	//$id = 1;
	//$score = 110;
	$servername = "ip-172-31-37-56";
        $db_username = "miles";
        $db_password = "12345";
        $dbname = "Players";
        $login = true;
        $conn = new mysqli($servername,$db_username,$db_password,$dbname);
	if($conn->connect_error){
		die("Connection Failed");
	} 
	$sql = "SELECT Score FROM Players WHERE ID = $id";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
	$prev_score = floatval($data['Score']);
	if($score > $prevscore){
		$sql = "UPDATE Players SET Score = $score WHERE ID = $id";
		if($conn->query($sql) === TRUE){
			echo "Score was updated";
		} else{
			echo "Failed to update";
		}
	} else{
			echo "No highscore";
	}
?>
