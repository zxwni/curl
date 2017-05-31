<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/31
 * Time: 16:50
 */
$curlObj= curl_init();                  //初始化
curl_setopt($curlObj,CURLOPT_URL,"https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js");//设置访问网页的地址
curl_setopt($curlObj,CURLOPT_RETURNTRANSFER,true); //执行之后不直接打印出来

date_default_timezone_set("PRC");
curl_setopt($curlObj,CURLOPT_SSL_VERIFYPEER,0);

$output = curl_exec($curlObj);//执行
curl_close($curlObj);        //关闭cURL
echo $output;