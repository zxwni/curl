<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/31
 * Time: 15:22
 */
$curlObj= curl_init();                  //初始化
curl_setopt($curlObj,CURLOPT_URL,"http://www.webxml.com.cn/WebServices/WeatherWS.asmx/getWeather?theCityCode=北京&theUserID=");//设置访问网页的地址
curl_setopt($curlObj,CURLOPT_RETURNTRANSFER,true); //执行之后不直接打印出来
curl_setopt($curlObj,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
$output = curl_exec($curlObj);//执行
curl_close($curlObj);        //关闭cURL
echo str_replace("百度","哈哈",$output);


