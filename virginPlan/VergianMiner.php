


<?php
// ip 10.120.100.42


// to offer deffrent kind of format 
// $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default


function getIncome($_id){
	$db=new mysqli('127.0.0.1','root','XYZ','DB756');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database. Please try again later.';
		exit;
	}
	$sql="select Id, income from InComeID where Id= $_id";
	$result= $db->query($sql);
	$objec = $result->fetch_assoc();
	$result->close();
	$db->close();
	return $objec['income'];
}


function getAllRows(){
	$db=new mysqli('127.0.0.1','root','XYZ','DB756');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database. Please try again later.';
		exit;
	}
	$sql="select Id, income from InComeID";
	$result= $db->query($sql);
	while($row = $result->fetch_assoc()){
		echo "{$row['Id']} have Incoming of: {$row['income']} <br />";
	}
	$result->close();
	$db->close();
}

if($_GET['id']){
	$addPhoneFee=0;
	$phone=$_GET['phone'];
	
	
	if($phone=='yes'){
		$addPhoneFee=20;
		settype($addPhoneFee, "integer");
	}
	else if($phone!='yes')
	{
		$addPhoneFee=0;
		settype($addPhoneFee, "integer");

	}

	$castomID= $_GET['id'];

	$costomIncoming = getIncome($castomID);
	$perstege=$costomIncoming*.0125;

	if($perstege>= 30){
		//if($format == 'json') {
		// tel the header that we have that we sent json format 
		$planPrice=35+$addPhoneFee;
		
			header('Content-type: application/json');
			$Ofer='{
  "name": "Simple Starter Plan",
  "description": "Get a single line with unlimited talk, text and up to 500MB of 4G LTE data.",
  "dataEnabled": true,
  "type": "prepaid",
  "price": '.$planPrice.',
  "company": {
         "name": "virgen",
         "logo": "/logo/url.jpg (300x300 pixels)",
         "publicityMessage": "Companity specific publicity message"
     }
}';
			echo($Ofer);

	
}}
// to get ther response from anther php file.
//$response = http_get("http://www.example.com/", array("timeout"=>1), $info);
//print_r($info);
//

?>
