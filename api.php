<?php

$options = array("location" =>  "http://localhost/pro/webservices/service.php",
"uri" => "http://localhost");


$client = new SoapClient(null, $options);

$data = $client->get_service();




$id =  $_GET['id'];

$arr = [];
    
foreach($data as $ud) {
if($id == $ud['id']){	


$value = [

		'user_name' => $ud['user_name'],
		'select_bank' => $ud['select_bank'],
		'account_no' => $ud['account_no'],
		'funds'=>$ud['funds'],
		'account_title'=>$ud['account_title'],
		'cnic_no'=>$ud['cnic_no'],


];



echo json_encode($value);


}

}






?>
