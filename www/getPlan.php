


<?php
// ip 10.120.100.42


// to offer deffrent kind of format
// $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default


function getIncome($_id){
	$db=new mysqli('10.120.100.44','student','student','db756');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database. Please try again later.';
		exit;
	}
	//$sql="select Id, income from InComeID where Id= $_id";
	$sql="select id, income from income where id= $_id";

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

// cheek if there is any get request will do the proccess.
if($_GET['id']){
	// set the have fone fee
	$addPhoneFee=0;
	$castomID= $_GET['id'];
	$phone=$_GET['phone'];

	// if the request has pone set to yes will add the pone fee.
	if($phone=='yes'){
		$addPhoneFee=10;
		settype($addPhoneFee, "integer");
	}
	else if($phone!='no')
		{
			$addPhoneFee=0;
			settype($addPhoneFee, "integer");

		}


	$costomIncoming = getIncome($castomID);
	$perstege=$costomIncoming*.0125;

	if($perstege>= 30 && $perstege < 40 ){
		//if($format == 'json') {
		// tel the header that we have that we sent json format
		
		
		$planPrice=35+$addPhoneFee;
		$dataUsege=" 500MB ";

		getThePanIno($planPrice,$dataUsege);
		

	}
	if($perstege>= 40 && $perstege < 50 ){
		//if($format == 'json') {
		// tel the header that we have that we sent json format
		$addPhoneFee+=10;
		$planPrice=45+$addPhoneFee;
		$dataUsege=" 1000MB ";

		getThePanIno($planPrice,$dataUsege);
		

	}
	if($perstege>= 50 && $perstege < 60){
		//if($format == 'json') {
		// tel the header that we have that we sent json format
		$addPhoneFee+=15;
		$planPrice=50+$addPhoneFee;
		$dataUsege=" unlimited ";

		getThePanIno($planPrice,$dataUsege);
		

	}
	
	
	}
	
	// to set the json format with aquerate 
	function getThePanIno($price_,$dataUsage_){
	header('Content-type: application/json');
	
	//set the price if it has phone.
	$planPrice=$price_;
	$data=$dataUsage_;
	
		$Ofer='{
  "name": "Simple Starter Plan",
  "description": "Get a single line with unlimited talk, text and up to '.$data.' of 4G LTE data.",
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

		
	}
	
// to get ther response from anther php file.
//$response = http_get("http://www.example.com/", array("timeout"=>1), $info);
//print_r($info);
//

?>
