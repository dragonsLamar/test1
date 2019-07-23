<?php

// 获取扩展名
// 
// 思路1
// 
// 找最后一个点的下标  strrpos
// 
// 找到最后一个点的下标,结果+1,才是扩展名的第一个字符的下标
// 
// 结果作为substr()的第二个参数
// 
// 
// 思路2
// 
// 找最后一个点,截取新的字符串
// 
// 将结果作为substr()的第一个参数,第二个参数是1,也就是从第二个开始截取
// 

// 思路3 字符串反转
// 
// 反转字符串,找到第一个点,向前截取字符串
// 
// 再将结果再次反转
// 

// $str = '123.456.789.html';

// $name = strrev($str) ;

// echo $name, '<br>';

// 找到第一个点,向前截取

// $s = strstr($name , '.' , true) ;

// echo $s , '<br>';

// $ext = strrev($s) ;

// echo $ext , '<br>';

// $ext = strrev(strstr(strrev($str) , '.' , true));


// 思路4 字符串反转
// 
// 第一个点的下标,正好是需要截取的扩展名的字符长度
// 
// 可以使用substr()从第一个字符开始截取,截取第一个点下标数值表示的字符个数
// 
// 最后将结果反转
// 
// 

$str = '123.456.789.html';

$name = strrev($str) ;

echo $name, '<br>';

$num = strpos($name , '.');

$s = substr($name , 0 , $num);

echo $s, '<br>';

$ext = strrev($s);

echo $ext, '<br>';

$ext = strrev(substr(strrev($str) , 0 , strpos(strrev($str) , '.')));
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<s>thhh </s>
	</body>
</html>

