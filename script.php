<?php
$url = "http://116.193.217.4:9091/visual_ivr_mosiur/dynamic_url_generation/index.php";
$data = array("phone_number" => "01792788718");                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                                                                                                                        
$result = curl_exec($ch);
?>