<?php
function fput(){
	$url = "curl -X PUT --header 'Content-Type: application/json' --header 'Accept: application/json' -d 'Fissi' 'http://localhost:8080/api/tutorial/1.0/employees/1'";
	$request_url = 'http://localhost:8080/api/tutorial/1.0/employees/1';

	$data = ['public_write' => true];
	$curl = curl_init($request_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
	curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);
	
	$response = curl_exec($curl);
	curl_close($curl);
	echo $response . PHP_EOL;
}


function fdelete(){
	$url = "curl -X DELETE --header 'Accept: */*' 'http://localhost:8080/api/tutorial/1.0/employees/1'";
	$request_url = 'http://localhost:8080/api/tutorial/1.0/employees/1';

	$curl = curl_init($request_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);
	
	$response = curl_exec($curl);
	curl_close($curl);
	echo $response . PHP_EOL;
}


function fpost(){
	$url = "curl -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' -d 'Fissi' 'http://localhost:8080/api/tutorial/1.0/employees'";
	$request_url = 'http://localhost:8080/api/tutorial/1.0/employees';
	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	//curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);

	$response = curl_exec ($curl) ;
	curl_close ($curl) ;
	echo $response . PHP_EOL; 
}


function fget(){
	$url = "curl -X GET --header 'Accept: application/json' 'http://localhost:8080/api/tutorial/1.0/employees'";
	$request_url = 'http://localhost:8080/api/tutorial/1.0/employees';

	$curl = curl_init($request_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);

	$response = curl_exec($curl);
	curl_close($curl);
	echo $response . PHP_EOL;
}
?>