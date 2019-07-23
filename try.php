<?php
//date_default_timezone_set('PRC');
//echo  date('m-d-Y',strtotime('-1 day'));
//echo '<br>';
//echo getenv('REMOTE_ADDR');
//$a = ['5','4','7','4','2','8','1'];

//rsort($a);
//print_r($a);
//$a= '654321';
//$a =new Date();
//echo strrev($a);
//echo gethostbyname('www.baidu.com');
//echo $_SERVER['REMOTE_ADDR'];
//echo '<a&gt;</a&gt;';

$html='<div>的广泛地<ul><li>水电费好地方<a href="www.baidu.com">百度首页</a></li><ul><div>';
//$expression =  "/(<[^>]*>)/";
$expression =  "/(<[^>]*>)/";
echo preg_replace($expression, '', $html);

//$string = 'April 15, 2003';
//$pattern = '/(\w+) (\d+), (\d+)/i';
//$replacement = '${1}1,$3';
//echo preg_replace($pattern, $replacement, $string);

//'/(<[^>]*>)/'
