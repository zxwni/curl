<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/31
 * Time: 16:13
 */
$data = 'username=649835464@qq.com&password=zxw8624601&remember=1';
$curlObj = curl_init();
curl_setopt($curlObj,CURLOPT_URL,"http://www.imooc.com/passport/user/login");
curl_setopt($curlObj,CURLOPT_RETURNTRANSFER,true);

//cookie 设置,要在所有会话开始之前设置好
date_default_timezone_set('PRC'); //使用cookie 必须先设置好时区
curl_setopt($curlObj,CURLOPT_COOKIESESSION,TRUE);
curl_setopt($curlObj,CURLOPT_COOKIEFILE,'cookiefile');
curl_setopt($curlObj,CURLOPT_COOKIEJAR,'cookiefile');
curl_setopt($curlObj,CURLOPT_COOKIE,session_name().'='.session_id());
curl_setopt($curlObj,CURLOPT_HEADER,0);
curl_setopt($curlObj,CURLOPT_FOLLOWLOCATION,1); // 这样能够让curl支持页面跳转

curl_setopt($curlObj,CURLOPT_POST,1);
curl_setopt($curlObj,CURLOPT_POSTFIELDS,$data);
curl_setopt($curlObj,CURLOPT_HTTPHEADER,array('application/x-www-form-urlencoded;charset=utf-8',"Content-Size:".strlen($data)));
$a = curl_exec($curlObj);
$b  =json_decode($a);
var_dump($b);
curl_setopt($curlObj,CURLOPT_URL,"http://www.imooc.com/space/index");
curl_setopt($curlObj,CURLOPT_POST,0);
curl_setopt($curlObj,CURLOPT_HTTPHEADER,array('Content-type:text/xml'));
$output = curl_exec($curlObj);
curl_close($curlObj);
echo $output;
