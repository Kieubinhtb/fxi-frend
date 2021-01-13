<?php
$FunPub = new FunPub();
$get = isset($_GET['action']) ? $_GET['action'] : 'index';
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        $data = json_decode(FunPub::Curl_index('http://api.fxinsites.com/v1/pages/home', ["name" => "Click Trades"], 'get'), JSON_UNESCAPED_UNICODE);
        break;
}