<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/31
 * Time: 15:30
 */
$city = '福州';
$data = "theCityCode=".$city."&theUserID= ";
$curlObj = curl_init();
curl_setopt($curlObj,CURLOPT_URL,"http://www.webxml.com.cn/WebServices/WeatherWS.asmx/getWeather");
curl_setopt($curlObj,CURLOPT_HEADER,0);
curl_setopt($curlObj,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlObj,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($curlObj,CURLOPT_POST,1);
curl_setopt($curlObj,CURLOPT_POSTFIELDS,$data);
curl_setopt($curlObj,CURLOPT_HTTPHEADER,array("Content-Type: application/x-www-form-urlencoded","Content-Length:".strlen($data)));
$result = curl_exec($curlObj);
if(!curl_errno($curlObj)){
    echo $result;
}else{
    echo 'Curl_error'.curl_error($curlObj);
}
