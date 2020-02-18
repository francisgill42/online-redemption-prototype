<?php

require_once('records.php');


$options = array("uri" => "http://localhost");


$server = new SoapServer(null, $options);


$server->setClass('service');


$server->handle();

?>