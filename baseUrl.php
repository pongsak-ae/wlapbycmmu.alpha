<?php

// Define WEB_META_BASE_URL
$HTTP_REFERER = isset($_SERVER["HTTP_REFERER"])?$_SERVER["HTTP_REFERER"]:'http://' . @$_SERVER["SERVER_NAME"] . '/';
list($HTTP_PROTOCAL) = explode(':', $HTTP_REFERER);
if(empty($HTTP_PROTOCAL)) $HTTP_PROTOCAL = 'http';

define("WEB_REWRITE_BASE",  "");
define("WEB_META_BASE_URL",  $HTTP_PROTOCAL."://" . @$_SERVER["SERVER_NAME"] .WEB_REWRITE_BASE. "/");

function getdata($url){
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_FAILONERROR, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
    $result = curl_exec($curl); 
    curl_close($curl);   
    return json_decode($result);
}

function DateThai($strDate){
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strMonthCut = Array('','มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}
    
?>