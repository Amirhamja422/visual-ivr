<?php
    $mobileNo = $_GET['mobileNo'];
	//$accountNo = $_GET['accountNo'];
    $ch = curl_init();
	$header = array('GET /1575051 HTTP/1.1',
        "Host: {$host}",
        'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Language:en-US,en;q=0.8',
        'Cache-Control:max-age=0',
        'Connection:keep-alive',
        'Host:adfoc.us',
        'User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
    );
	// if($mobileNo==''){
	// 	curl_setopt($ch, CURLOPT_URL, 'http://192.168.1.51/sonali-cc-api/get-transection.php?accountNo='.$accountNo);
	// } else {
	// 	curl_setopt($ch, CURLOPT_URL, 'http://192.168.1.51/sonali-cc-api/get-transection.php?mobileNo='.$mobileNo.'&accountNo='.$accountNo);
	// }
	
	curl_setopt($ch, CURLOPT_URL, 'http://192.168.1.22/sonali-cc-api/get-data.php?mobileNo='.$mobileNo);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

	$result = curl_exec($ch);
	//echo $result;
    //var_dump($result);
            
?>