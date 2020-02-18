<?php

$options = array("location" =>  "http://localhost/pro/webservices/service.php",
"uri" => "http://localhost");


$client = new SoapClient(null, $options);

$data = $client->get_service();


$id =  $_GET['id'];
$fundname =  $_GET['fundname'];

$arr = [];

$val = [];
    
foreach($data as $fd) {
if($id == $fd['id']){	

// print_r($fd['funds']);

foreach ($fd['funds'] as $acb) {


	if($fundname == $acb['fundname'])
		{
				$val[] = [

		'fundname' => $acb['fundname'],
		'bal' => $acb['bal'],
		'limit' => $acb['limit'],
		'remaining_bal'=>$acb['remaining_bal'],

];

		}







}


}

}


echo json_encode($val);


// $fundname =  $_GET['fundname'];

// foreach($data as $ud) {
// if($fundname == $ud['fundname']){	


// $value = [

// 		'bal' => $ud['bal'],
// 		'limit' => $ud['limit'],
// 		'remaining_bal' => $ud['remaining_bal'],	

// ];



// }

// }









?>
