<?php
if($_POST){
    $username = $_POST['form-username'];
    $password = $_POST['form-password'];
    
    #send request
    $url = "http://example.com/request/post/json"; 
    $data = json_encode(["username" => $username   "password" => $password]);
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_exec($curl);
    curl_close($curl);
    

}


?>