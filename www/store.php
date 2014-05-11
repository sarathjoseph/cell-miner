<?php
	if(isset($_POST['action']) && !empty($_POST['action'])) {
    	$action = $_POST['action'];

    	switch($action) {
        	case 'register_carrier':
				$mysqli = new mysqli("localhost", "root", "root", "cellminer");

			    if ($mysqli->connect_errno) {
			      die("Failed to connect to MySQL for saving: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
			    }

			    if(!empty($_POST['carrier']) && !empty($_POST['ip-address'])) {

			      if (!($stmt = $mysqli->prepare("INSERT INTO Carrier(name, address) VALUES (?,?)"))) {
			        die("Prepare failed for carrier: (" . $mysqli->errno . ") " . $mysqli->error);
			      }

			      if (!$stmt->bind_param("ss", $_POST['carrier'], $_POST['ip-address'])) {
			        die("Binding parameters failed for carrier: (" . $stmt->errno . ") " . $stmt->error);
			      }
			      
			    }

			    if (!$stmt->execute()) {
			      die("Execute failed for saving: (" . $stmt->errno . ") " . $stmt->error);
			    }  

			    echo('index.php');
				break;
    	}
	}
?>