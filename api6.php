<?php 

  

$curl = curl_init(); 

  

curl_setopt_array($curl, [ 

	CURLOPT_URL => "https://weather1395.p.rapidapi.com/temperature?url=Rome", 

	CURLOPT_RETURNTRANSFER => true, 

	CURLOPT_FOLLOWLOCATION => true, 

	CURLOPT_ENCODING => "", 

	CURLOPT_MAXREDIRS => 10, 

	CURLOPT_TIMEOUT => 30, 

	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 

	CURLOPT_CUSTOMREQUEST => "GET", 

	CURLOPT_HTTPHEADER => [ 

		"X-RapidAPI-Host: weather1395.p.rapidapi.com", 

		"X-RapidAPI-Key: 9252d2ad17msh66f549e1a00206dp1ee0b0jsn544707f23395" 

	], 

]); 

  

$response = curl_exec($curl); 

$err = curl_error($curl); 

  

curl_close($curl); 

  

if ($err) { 

	echo "cURL Error #:" . $err; 

} else { 

	echo $response; 

} 