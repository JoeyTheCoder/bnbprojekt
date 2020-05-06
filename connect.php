
/*DB Connection*/
<?php
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$mail = $_POST['mail'];
	$zimmer = $_POST['zimmer'];
	
	$conn = new mysqli('localhost:3306', 'joel','L9nNd5$dSbvG','bnb');{
		if($conn->connect_error){
			die('Connection Failed : '.$conn->connect_error);
		}else{
			$stmt = $conn->prepare("insert into vermieten(fname, lname, sdate, edate, mail, zimmer)
			values(?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("ssssss",$fname, $lname, $sdate, $edate, $mail, $zimmer);
			if($stmt == ""){
				alert('Feld noch leer');
			}elseif ($sdate == "TT.MM.JJJJ"){
				alert('Feld noch leer'); 	
			}elseif ($sdate == "TT.MM.JJJJ"){
				alert('Feld noch leer');}
			else{
			$stmt->execute();
                echo "<script>window.location = 'https://bnbprojekt.tscherlachwalking.ch/#confirmation'</script>";
			$stmt->close();
			$conn->close();
			}
		}
	}

?>